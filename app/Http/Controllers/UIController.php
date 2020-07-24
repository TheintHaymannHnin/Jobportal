<?php

namespace App\Http\Controllers;

use App\{Category,Job,Cv,Education,Experience,Skill};
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

    public function cvForm(Request $request, $jobId){
        if(Auth::check()){
            $jobToApply = Job::findOrFail($jobId);
            return view('client.cv-form',compact('jobToApply'));
        }else{
            return redirect('/login');
        }

    }

    public function storeCvForm(Request $request){

        $request->validate([
            'father_name' => 'required',
            'mother_name' => 'required',
            'dob' => 'required',
            'gender' => 'required',
            'email' => 'required',
            'nrc' => 'required',
            'phone' => 'required',
            'address' => 'required',
            'religion' => 'required',
            'race' => 'required',
            'marital_status' => 'required',
            'position' => 'required',

            // education
            'major.*' => 'required',
            'level.*' => 'required',
            'university.*' => 'required',

            // experience
            'title.*' => 'required',
            'company.*' => 'required',
            'duration.*' => 'required',

            // skill
            'name.*' => 'required',

            'expected_salary' => 'required',
        ]);


        $cv = Cv::create([
            'job_id' => $request->job_id,
            'employee_id' => Auth::user()->id,
            'father_name' => $request->father_name,
            'mother_name' => $request->mother_name,
            'gender' => $request->gender,
            'dob' => $request->dob,
            'email' => $request->email,
            'nrc' => $request->nrc,
            'phone' => $request->phone,
            'address' => $request->address,
            'religion' => $request->religion,
            'race' => $request->race,
            'marital_status' => $request->marital_status,
            'position' => $request->position,
            'expected_salary' => $request->expected_salary,
        ]);

        $eduCount = count($request->major);
        for($i = 0; $i < $eduCount; $i++){
            $major = $request->major[$i];
            $level = $request->level[$i];
            $university = $request->university[$i];

            Education::create([
                'cv_id' =>  $cv->id,
                'major' => $major,
                'level' => $level,
                'university' => $university
            ]);
        }

        $expCount = count($request->title);

        for($i = 0; $i < $expCount; $i++){
            $title = $request->title[$i];
            $company = $request->company[$i];
            $duration = $request->duration[$i];
            Experience::create([
                'cv_id' =>  $cv->id,
                'title' => $title,
                'company' => $company,
                'duration' => $duration
            ]);
        }

        foreach ($request->name as $skillName) {
            Skill::create([
            'cv_id' => $cv->id,
            'name' => $skillName
            ]);
        }

        alert()->success('Congrats!', 'You have successfully posted your CV');
        return redirect('/');

    }


}
