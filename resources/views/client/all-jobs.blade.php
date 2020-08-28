@extends('client.layouts.client')
@section('index')
    {{-- <div class="hero-wrap js-fullheight" style="background-image: url('client/images/image14.jpg');" data-stellar-background-ratio="0.5">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text js-fullheight align-items-center justify-content-start" data-scrollax-parent="true">
          <div class="col-xl-10 ftco-animate mb-5 pb-5" data-scrollax=" properties: { translateY: '70%' }">
              <p class="mb-4 mt-5 pt-5" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }">We have <span class="number" data-number="{{ $jobsCount }}">0</span> great job offers you deserve!</p>

                <div class="row">
                    <div class="col-md-6">
                        <h1 class="mb-5" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }">Your Dream <br><span>Job is Waiting</span></h1>
                    </div>
                    <div class="col-md-6">
                        <a href="" class="btn btn-primary float-right">
                            <h5 class="pt-2">Browse All Jobs</h5>
                        </a>
                    </div>
                </div>

						<div class="ftco-search">
						<div class="row">
		                <div class="col-md-12 nav-link-wrap">
			            <div class="nav nav-pills text-center" id="v-pills-tab" role="tablist" aria-orientation="vertical">
			              <a class="nav-link active mr-md-1" id="v-pills-1-tab" data-toggle="pill" href="#v-pills-1" role="tab" aria-controls="v-pills-1" aria-selected="true">
                              Find a Job
                            </a>
			            </div>
			          </div>
			          <div class="col-md-12 tab-wrap">

			            <div class="tab-content p-4" id="v-pills-tabContent">

			              <div class="tab-pane fade show active" id="v-pills-1" role="tabpanel" aria-labelledby="v-pills-nextgen-tab">

			              	<form action="{{url('/jobs/search')}}" method="GET" class="search-job">
                                  @csrf

			              		<div class="row">
			              			<div class="col-md">
			              				<div class="form-group">
				              				<div class="form-field">
				              					<div class="icon">
                                                      <span class="icon-briefcase"></span>
                                                </div>
								                <input type="text" name="name" class="form-control" placeholder="eg: Garphic, Web Developer">
								              </div>
							              </div>
			              			</div>
			              			<div class="col-md">
			              				<div class="form-group">
			              					<div class="form-field">
				              					<div class="select-wrap">
						                        <div class="icon"><span class="ion-ios-arrow-down"></span></div>
                                                    <select name="category_id" id="category_id" class="form-control">
                                                        <option value="">Select Category</option>
                                                        @foreach($categories as $category)
                                                            <option value="{{$category->id}}">{{$category->name}}</option>
                                                        @endforeach
                                                    </select>
						                        </div>
								              </div>
							              </div>
			              			</div>
			              			<div class="col-md">
			              				<div class="form-group">
			              					<div class="form-field">
				              					<div class="icon"><span class="icon-map-marker"></span></div>
                                                  <select name="location_id" id="location_id" class="form-control">
                                                    <option value="">Select Location</option>
                                                    @foreach($locations as $location)
                                                        <option value="{{$location->id}}">{{$location->address}}</option>
                                                    @endforeach
                                                </select>
								              </div>
							              </div>
			              			</div>
			              			<div class="col-md">
			              				<div class="form-group">
			              					<div class="form-field">
								                <input type="submit" value="Search" class="form-control btn btn-primary">
								              </div>
							              </div>
			              			</div>
			              		</div>
                              </form>

			              </div>
			            </div>
			          </div>
			        </div>
		        </div>
          </div>
        </div>
      </div>
    </div> --}}
	<section class="ftco-section bg-light">
		<div class="container">

            <div class="row">
                {{-- CATEGORY CLUSTER  --}}
                <div class="col-md-12">
                    <div class="row justify-content-center mb-2">
                        <div class="col-md-7 heading-section text-center ftco-animate">
                            <h5>Jobs by Category</h5>
                            <form action="{{url('/search_jobs_by_algo')}}" method="GET">
                                @csrf
                               <div class="input-group">
                                <input type="text" name="job_name" class="form-control" placeholder="search ... ">
                                <button type="submit" class="btn btn-primary" style="border-radius: 0px 4px 4px 0px">
                                   <i class="fa fa-search"></i> Search Jobs
                                </button>
                               </div>
                            </form>
                        </div>
                    </div>
                    <div class="row">
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
                                <a href="{{url('/cv_form/'.$job->id)}}" class="btn btn-primary">Apply Job</a>
                            </div>
                            </div>
                    </div>
                    @endforeach
                @else
                <p style="color: black; font-size: 20px">No job found!</p>
                @endif

                </div>
                </div>
            </div>

		</div>
    </section>
@endsection

