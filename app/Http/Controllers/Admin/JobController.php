<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\{Job,Category,Company,Cv,Type};
use App\Exports\JobsExport;
use Maatwebsite\Excel\Facades\Excel;

class JobController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $jobs= Job::all();

        return view('admins.jobs.index',compact('jobs'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::all();
        $companies = Company::all();
        $types= Type::all();


        return view('admins.jobs.create-edit',compact('categories','companies','types'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Job::create($request->all());
        return redirect('/admin/job');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $job=Job::findorfail($id);
        return view('admins.jobs.create-edit',compact('job'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
         $job=Job::findorfail($id);
        $job->update($request->all());
        return redirect('/admin/job');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $job=Job::findorfail($id);
        $job->delete();
        return redirect('/admin/job');
    }

    // excel download
    public function downloadJobExcelSheet(){
        $date = date('d-M-Y');
      return Excel::download(new JobsExport,$date.'_'.'job.xlsx');
    }

    // ============ CV Forms ====================

    public function requestCVs($jobId){
        $cvs = Cv::where('job_id',$jobId)->get();
        return view('admins.jobs.cvs.request',compact('cvs'));
    }
}
