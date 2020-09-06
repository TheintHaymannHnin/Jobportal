@extends('client.layouts.client')
@section('index')

    <div class="hero-wrap js-fullheight" style="background-image: url('client/images/image14.jpg');" data-stellar-background-ratio="0.5">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text js-fullheight align-items-center justify-content-start" data-scrollax-parent="true">

          <div class="col-xl-10 ftco-animate mb-5 pb-5" data-scrollax=" properties: { translateY: '70%' }">
            <a href="{{url('/notis')}}">
                @if(Auth::check())
                    <span style="margin-left: 1000px;margin-bottom: 43px; font-size: 15px" class="badge badge-pill badge-danger">
                    Message
                    {{ $employeeNotisCount }}
                    </span>
                @endif
            </a>

                <p class="mb-4 mt-5 pt-5" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }">
                  We have <span class="number" data-number="{{ $jobsCount }}">0</span> great job offers you deserve!
                </p>
                <h1 class="mb-5" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }">
                    Your Dream <br> <span>Job is Waiting</span>
                </h1>

						<div class="ftco-search">
						<div class="row">
		                <div class="col-md-12 nav-link-wrap">
			            <div class="nav nav-pills text-center" id="v-pills-tab" role="tablist" aria-orientation="vertical">
			                <a class="nav-link active mr-md-1" id="v-pills-1-tab" data-toggle="pill" href="#v-pills-1" role="tab" aria-controls="v-pills-1" aria-selected="true">
                              Find a Job
                            </a>
			                <a href="{{url('/category_lists')}}" class="btn btn-info mb-3 ml-3">
                              Browse By Category
                            </a>
			                <a href="{{url('/company_lists')}}" class="btn btn-info mb-3 ml-3">
                              Browse By Company
                            </a>
			            </div>
                      </div>
			          <div class="col-md-12 tab-wrap">

			            <div class="tab-content p-4" id="v-pills-tabContent">

			              <div class="tab-pane fade show active" id="v-pills-1" role="tabpanel" aria-labelledby="v-pills-nextgen-tab">

                            <input type="checkbox" id="searchBySalary">
                            <label for="searchBySalary" style="cursor: pointer">Search by salary</label>

			              	<form action="{{url('/jobs/search')}}" method="GET" class="search-job">
                                  @csrf

                                <div class="mb-1" id="salaryInputs" style="display: none">
                                    <div class="form-group">
                                        <div class="row">
                                            <div class="col-md-6">
                                            <input type="text" name="min_salary" class="form-control" placeholder="Min Salary">
                                            </div>
                                            <div class="col-md-6">
                                            <input type="text" name="max_salary" class="form-control" placeholder="Max Salary">
                                            </div>
                                        </div>
                                    </div>
                                </div>
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
						                        <div class="icon">
                                      <span class="ion-ios-arrow-down"></span>
                                    </div>
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
				              					<div class="icon">
                                  <span class="icon-map-marker"></span>
                                </div>
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
    </div>
	<section class="ftco-section bg-light">
        <div class="container">
            <div class="row justify-content-center mb-5 pb-3">
                <div class="col-md-7 heading-section text-center ftco-animate">
                    <span class="subheading">Recently Added Jobs</span>
                    <h2 class="mb-4"><span>Recent</span> Jobs</h2>
                </div>
            </div>

        <div class="row">
        @foreach($jobs as $job)
            <div class="col-md-12 ftco-animate">

        <div class="job-post-item bg-white p-4 d-block d-md-flex align-items-center">

            <div class="mb-4 mb-md-0 mr-5">
            <div class="job-post-item-header d-flex align-items-center">
                <h2 class="mr-3 text-black h3">
                    {{$job->name}}
                </h2>
                <div class="badge-wrap">
                <span class="bg-primary text-white badge py-2 px-3">{{$job->type['name']}}</span>
                </div>
            </div>
            <div class="job-post-item-body d-block d-md-flex">
                <div class="mr-3">
                    <span class="icon-layers"></span> <a href="#">{{$job->company['name']}}</a>
                </div>
                <div>{{$job->category->name}}</div>
                <div><span class="icon-my_location"></span> <span>{{$job->company['address']}}</span></div>
            </div>
            </div>

            <div class="ml-auto d-flex">
            <a href="{{url('/job/'.$job->id.'/detail')}}" class="btn btn-success py-2 mr-1">
            Detail
            </a>
            <a href="{{url('/cv_form/'.$job->id)}}" class="btn btn-primary py-2 mr-1">
            Apply Job
            </a>
            </div>
        </div>
        </div><!-- end -->
        @endforeach

    </div>
    <div class="row mt-5">
        <div class="col text-center">
            {{ $jobs->links() }}
        </div>
    </div>
    </div>
</section>
@endsection

@section('script')
    <script>
        $(document).ready(function(){
            $('#searchBySalary').click(function(){

                if($(this).prop("checked") == true){
                    $('#salaryInputs').css('display','block');
                }
                else if($(this).prop("checked") == false){
                    $('#salaryInputs').css('display','none');
                }

            });
        });
    </script>
@endsection

