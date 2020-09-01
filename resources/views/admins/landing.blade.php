@extends('admins.layouts.master')
@section('title', 'Dashboard')
@section('content')
<div class="container-fluid">
          <div class="animated fadeIn">
            <div class="row">

            @if(Auth::user()->role == 'Admin')
              <div class="col-sm-6 col-lg-3">
                <div class="card text-white bg-primary">
                  <div class="card-body pb-0">
                    <div class="btn-group float-right">
                      <button class="btn btn-transparent dropdown-toggle p-0" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i class="icon-settings"></i>
                      </button>
                      <div class="dropdown-menu dropdown-menu-right">
                        <a class="dropdown-item" href="#">Action</a>
                        <a class="dropdown-item" href="#">Another action</a>
                        <a class="dropdown-item" href="#">Something else here</a>
                      </div>
                    </div>
                    <div class="text-value">9.823</div>
                    <div>Members online</div>
                  </div>
                  <div class="chart-wrapper mt-3 mx-3" style="height:70px;">
                    <canvas class="chart" id="card-chart1" height="70"></canvas>
                  </div>
                </div>
              </div>
              <!-- /.col-->
              <div class="col-sm-6 col-lg-3">
                <div class="card text-white bg-info">
                  <div class="card-body pb-0">
                    <button class="btn btn-transparent p-0 float-right" type="button">
                      <i class="icon-location-pin"></i>
                    </button>
                    <div class="text-value">9.823</div>
                    <div>Members online</div>
                  </div>
                  <div class="chart-wrapper mt-3 mx-3" style="height:70px;">
                    <canvas class="chart" id="card-chart2" height="70"></canvas>
                  </div>
                </div>
              </div>
              <!-- /.col-->
              <div class="col-sm-6 col-lg-3">
                <div class="card text-white bg-warning">
                  <div class="card-body pb-0">
                    <div class="btn-group float-right">
                      <button class="btn btn-transparent dropdown-toggle p-0" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i class="icon-settings"></i>
                      </button>
                      <div class="dropdown-menu dropdown-menu-right">
                        <a class="dropdown-item" href="#">Action</a>
                        <a class="dropdown-item" href="#">Another action</a>
                        <a class="dropdown-item" href="#">Something else here</a>
                      </div>
                    </div>
                    <div class="text-value">9.823</div>
                    <div>Members online</div>
                  </div>
                  <div class="chart-wrapper mt-3" style="height:70px;">
                    <canvas class="chart" id="card-chart3" height="70"></canvas>
                  </div>
                </div>
              </div>
              @endif

              @if(Auth::user()->role == 'Company')
              <!-- /.col-->
              <div class="col-sm-6 col-lg-3">
                <div class="card text-white bg-primary">
                  <div class="card-body pb-0">
                    <div class="btn-group float-right">
                      <button class="btn btn-transparent dropdown-toggle p-0" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i class="icon-settings"></i>
                      </button>
                      <div class="dropdown-menu dropdown-menu-right">
                        <a class="dropdown-item" href="#">Action</a>
                        <a class="dropdown-item" href="#">Another action</a>
                        <a class="dropdown-item" href="#">Something else here</a>
                      </div>
                    </div>
                    <div class="text-value">9.823</div>
                    <div>Members online</div>
                  </div>
                  <div class="chart-wrapper mt-3 mx-3" style="height:70px;">
                    <canvas class="chart" id="card-chart4" height="70"></canvas>
                  </div>
                </div>
              </div>
              <!-- /.col-->
              <!-- /.col-->
              <div class="col-sm-6 col-lg-9">
                <div class="card text-white bg-primary">
                  <div class="card-body pb-0">

                        <div class="card">
                            <div class="card-body text-black-50">
                                <h5 class="text-danger">
                                    You have to pay to be able to upload your jobs!
                                </h5>
                                <ul type="square">
                                    <li>Service Cost: $500</li>
                                    <li>Payment Method: Wave Money</li>
                                    <li>Phone No: 09403438913</li>
                                </ul>
                            </div>
                        </div>
                        @if(Auth::user()->status == null)
                        <form action="{{url('admin/inform_to_admin/'.Auth::user()->id)}}" method="POST">
                            @csrf
                            <button type="submit" class="btn" style="background-color: pink" onclick="return confirm('Are you sure you want to inform?')">
                                Inform to Admin
                            </button>
                        </form>
                        @elseif(Auth::user()->status == 'request')
                            <div class="alert alert-warning">
                                <h5>Pending ...</h5>
                                <i style="color: black">
                                    <strong>Please wait for admin approvement!</strong>
                                </i>
                            </div>
                        @else
                            <div class="alert bg-white">
                                <i style="color: green">
                                    <strong>You're Authenticated!</strong>
                                </i>
                            </div>
                        @endif
                  </div>
                  <div class="chart-wrapper mt-3 mx-3" style="height:50px;">
                    <canvas class="chart" id="card-chart4" height="70"></canvas>
                  </div>
                </div>
              </div>
              <!-- /.col-->
              @endif
            </div>
            <!-- /.row-->



          </div>
        </div>

@endsection
