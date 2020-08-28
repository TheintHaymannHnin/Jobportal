<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\{Category,Job, CollaborativeFiltering,};
use App\User;

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

        return view('client.all-jobs',compact('jobs'));
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

        $jobs = $collaborativeFilteringAlgorithm->filterJobs($modal,$columnNameToFilter,$targetId);

        return view('client.all-jobs',compact('jobs'));
    }
}

