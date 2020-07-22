<?php

namespace App\Http\Controllers;

use App\{Category,Job};
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UIController extends Controller
{
    public function index(){
        $categories = Category::all();
        $jobsCount= Job::all()->count();
        $jobs= Job::paginate(5);
        return view('client.index',compact('categories','jobs','jobsCount'));
    }

    public function about(){
        return view('client.about');
    }

    public function cvForm(){
        if(Auth::check()){
            return view('cv');
        }else{
            return redirect('/login');
        }


    }
}
