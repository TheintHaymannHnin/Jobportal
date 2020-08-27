<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\{Category,Job, CollaborativeFiltering};

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
}

