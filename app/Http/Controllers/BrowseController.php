<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\{Category,Job, CollaborativeFiltering, Jaro, User};

class BrowseController extends Controller
{
    public function categorylist()
    {
        $categories = Category::all();
        return view('client.category-list',compact('categories'));
    }

    public function allJobsIndexByCategory($categoryId){

        // $jobs = Job::where('category_id','=',$categoryId)->get();

        $collaborativeFilteringAlgorithm = new CollaborativeFiltering();

        $modal = new Job();
        $columnNameToFilter = 'category_id';
        $targetId = $categoryId;

        $jobs = $collaborativeFilteringAlgorithm->filterJobs($modal,$columnNameToFilter,$targetId);

        $job_status = "all_job";
        $tableStatus = "category";
        return view('client.all-jobs',compact('jobs','job_status','tableStatus','targetId'));
    }

    //company
    public function companylist()
    {
        $companies = User::where('role','Company')->get();
        return view('client.company-list',compact('companies'));
    }

    public function allJobsIndexByCompany($companyId){

        $collaborativeFilteringAlgorithm = new CollaborativeFiltering();

        $modal = new Job();
        $columnNameToFilter = 'company_id';
        $targetId = $companyId;

        $job_status = "all_job";
        $tableStatus = "company";
        $jobs = $collaborativeFilteringAlgorithm->filterJobs($modal,$columnNameToFilter,$targetId);

        return view('client.all-jobs',compact('jobs','job_status','tableStatus','targetId'));
    }

    // algo
    public function searchJobsByAlgo()
    {
        $jobName = request()->job_name;
        $targetId = request()->company_id;

        if($jobName == ''){
            return back();
        }

        $results = Job::all();
        if($results->count() > 0){
            foreach($results as $result){
                $target = request()->job_name;
                $jaro = new Jaro();
                $name = $jaro->JaroWinkler($target, $result->name);
                $data[] = $name;
            };
            $realName = array_search(max($data), $data);
            $jaroData = $results[$realName];

            request()->table_status == 'company' ? [$commonId ='company_id',$tableStatus='company'] : [$commonId = 'category_id',$tableStatus='category'];

            $searchJobs = Job::where($commonId,$targetId)
            ->where('name','like','%'.$jobName.'%')
            ->orderBy('id','DESC')
            ->get();

            $job_status = "search_job";
            return view('client.all-jobs',compact('searchJobs','job_status','tableStatus','targetId'));
        }

    }
}

