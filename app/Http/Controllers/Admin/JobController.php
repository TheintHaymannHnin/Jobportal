<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\{Job,Category,Company,Cv, CvAcceptRejectInfo, Type};
use App\Exports\JobsExport;
use Illuminate\Support\Facades\Auth;
use Maatwebsite\Excel\Facades\Excel;

class JobController extends Controller
{
    public function __construct()
    {
        $this->middleware(['auth','job']);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $jobs= Job::where('company_id',Auth::user()->id)->get();

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
        $types= Type::all();

        return view('admins.jobs.create-edit',compact('categories','types'));
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
        $categories = Category::all();
        $types= Type::all();

        $job=Job::findorfail($id);
        return view('admins.jobs.create-edit',compact('categories','types','job'));
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

    // excel download by theint
    public function downloadJobExcelSheet(){
        $date = date('d-M-Y');
        return Excel::download(new JobsExport,$date.'_'.'job.xlsx');
    }

    // ============ CV Forms ====================

    // request cv form index
    public function requestCVs($jobId){
        $cvs = Cv::where('job_id',$jobId)
        ->where('status','request')
        ->get();
        return view('admins.jobs.cvs.request',compact('cvs'));
    }

    // accepted cv form index
    public function acceptedCVs($jobId){
        $cvs = Cv::where('job_id',$jobId)
        ->where('status','accepted')
        ->get();
        return view('admins.jobs.cvs.accepted',compact('cvs'));
    }

    // rejected cv form index
    public function rejectedCVs($jobId){
        $cvs = Cv::where('job_id',$jobId)
        ->where('status','rejected')
        ->get();
        return view('admins.jobs.cvs.rejected',compact('cvs'));
    }

    // show cv form index
    public function showCvForm($cvId)
    {
        return view('admins.jobs.cvs.cvform',[
            'cv' => Cv::findOrFail($cvId),
            ]);
    }

    // accept cv form
    public function acceptCv($cvId)
    {
        $cv = Cv::findOrFail($cvId);
        $cv->update([
            'status' => 'accepted',
        ]);

        CvAcceptRejectInfo::create([
            'employee_id' => request()->employee_id,
            'company_id' => Auth::user()->id,
            'content' => request()->content,
        ]);

        return redirect('/admin/job/'.$cv->job_id.'/request_cvs');
    }
    // reject cv form
    public function rejectCv($cvId)
    {
        $cv = Cv::findOrFail($cvId);
        $cv->update([
            'status' => 'rejected',
        ]);
        CvAcceptRejectInfo::create([
            'employee_id' => request()->employee_id,
            'company_id' => Auth::user()->id,
            'content' => request()->content,
        ]);
        return redirect('/admin/job/'.$cv->job_id.'/request_cvs');
    }
}
