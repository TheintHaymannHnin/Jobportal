@extends('client.layouts.client')
@section('index')
	<section class="ftco-section bg-light">
		<div class="container">

            <div class="row">
                <!-- CATEGORY CLUSTER  -->
                <div class="col-md-12">
                    <div class="row justify-content-center mb-2">
                        <div class="col-md-7 heading-section text-center ftco-animate">
                            <h5>Jobs by
                                @if($tableStatus == 'company')
                                Company
                                @else
                                Category
                                @endif
                            </h5>
                            <form action="{{url('/search_jobs_by_algo')}}" method="GET">
                                @csrf
                               <div class="input-group">

                                <a
                                @if($tableStatus == 'category')
                                    href="{{url('/all_jobs/'.$targetId)}}"                          
                                @endif
                                @if($tableStatus == 'company')
                                 href="{{url('/all_jobs_by_company/'.$targetId)}}"
                                   
                                @endif

                                class="btn btn-primary mr-5 pt-3">View All</a>

                                <input type="hidden" name="company_id" value="{{$targetId}}">
                                <input type="hidden" name="table_status" value="{{$tableStatus}}">
                                <input type="text" name="job_name" class="form-control" placeholder="search ... ">
                                <button type="submit" class="btn btn-primary" style="border-radius: 0px 4px 4px 0px">
                                   <i class="fa fa-search"></i> Search Jobs
                                </button>
                               </div>
                            </form>
                        </div>
                    </div>
                    <div class="row">
                    @if($job_status == 'all_job')
                    @if($jobs->count() >= 1)
                        @foreach($jobs as $job)
                        <div class="col-md-12 ftco-animate" >
                            <div class="job-post-item bg-white p-4 d-block d-md-flex align-items-center">
                            <div class="mb-4 mb-md-0 mr-5">
                                <div class="job-post-item-header d-flex align-items-center">
                                <h5 class="mr-3 text-black">
                                    {{$job->name}}
                                </h5>
                                <div class="badge-wrap">
                                <span class="bg-primary text-white badge py-2 px-3">{{$job->type->name}}</span>
                                </div>
                                </div>
                                <div class="job-post-item-body d-block d-md-flex">
                                <div class="mr-3">
                                    <span class="icon-layers"></span> <a href="#">{{$job->company->name}}</a>
                                </div>
                                    <div class="mr-3" style="color: black">{{$job->category->name}}</div>
                                <div>
                                    <span style="color: black" class="icon-my_location"></span>
                                    <span style="color: black">{{$job->company->address}}</span>
                                </div>
                                </div>
                            </div>

                            <div class="ml-auto d-flex">
                                <a href="{{url('/job/'.$job->id.'/detail')}}" class="btn btn-success py-2 mr-1">
                                Detail
                                </a>
                                <a href="{{url('/cv_form/'.$job->id)}}" class="btn btn-primary">
                                Apply Job
                                </a>
                            </div>
                            </div>
                    </div>
                    @endforeach
                @else
                <p style="color: black; font-size: 20px">No job found!</p>
                @endif

                @else
               

                @foreach($searchJobs as $searchJob)
                <div class="col-md-12 ftco-animate">
                    <div class="job-post-item bg-white p-4 d-block d-md-flex align-items-center">
                    <div class="mb-4 mb-md-0 mr-5">
                        <div class="job-post-item-header d-flex align-items-center">
                        <h5 class="mr-3 text-black">
                            {{$searchJob->name}}
                        </h5>
                        <div class="badge-wrap">
                        <span class="bg-primary text-white badge py-2 px-3">{{$searchJob->type->name}}</span>
                        </div>
                        </div>
                        <div class="job-post-item-body d-block d-md-flex">
                        <div class="mr-3">
                            <span class="icon-layers"></span> <a href="#">{{$searchJob->company->name}}</a>
                        </div>
                            <div class="mr-3" style="color: black">{{$searchJob->category->name}}</div>
                        <div>
                            <span style="color: black" class="icon-my_location"></span>
                            <span style="color: black">{{$searchJob->company->address}}</span>
                        </div>
                        </div>
                    </div>

                    <div class="ml-auto d-flex">
                        <a href="{{url('/job/'.$searchJob->id.'/detail')}}" class="btn btn-success py-2 mr-1">
                                Detail
                        </a>
                        <a href="{{url('/cv_form/'.$searchJob->id)}}" class="btn btn-primary">
                             Apply Job
                        </a>
                    </div>
                    </div>
                </div>
                @endforeach

                @endif

                </div>
                </div>
            </div>

		</div>
    </section>
@endsection

