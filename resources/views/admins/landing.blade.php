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
              {{-- <div class="col-sm-6 col-lg-3">
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
              </div> --}}
              <!-- /.col-->
              <!-- /.col-->
              <div class="col-sm-6 col-lg-8">
                <div class="card text-white bg-primary">
                  <div class="card-body pb-0">

                        <div class="card">
                            <div class="card-header" style="background-color: pink">
                                <h6 style="color: black">
                                    You have to pay to be able to upload your jobs!
                                </h6>
                            </div>
                            <div class="card-body text-black-50">

                                <ul class="list-group">
                                    <li class="list-group-item"> <strong>Service Cost:</strong> $500</li>
                                    <li class="list-group-item">
                                        <strong>Payment Method:</strong> <br>
                                        <ul class="paymentUl">
                                            <li>
                                                <img src="https://lh3.googleusercontent.com/rPq4GMCZy12WhwTlanEu7RzxihYCgYevQHVHLNha1VcY5SU1uLKHMd060b4VEV1r-OQ" alt="" width="30px">
                                                Wave Money (09403438913)
                                            </li>
                                            <li>
                                                <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcSk6wJ8gmxlJI-5phdIf5xwdjjMwyy3bpS2JA&usqp=CAU" alt="" width="30px">
                                                KBZ (0175935629807692)
                                            </li>
                                            <li>
                                                <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcRD5lKnuh4xMqvmnl3s6JwoHjaCLe5crLNd7g&usqp=CAU" alt="" width="30px">
                                                AYA (9856301639045619)
                                            </li>
                                            <li>
                                                <img src="https://imgc.apk.tools/img/hLdlLVXARrvZzW5V9EPml1qv3YzPOeDhTDBEjAof8BfMzf62PwjHa7JIg1EHQbOZB1k7=s300" alt="" width="30px">
                                                CB (7864352976530914)
                                            </li>
                                        </ul>
                                    </li>
                                </ul>
                            </div>
                        </div>
                  </div>
                </div>
              </div>
              <!-- /.col-->

               <!-- /.col-->
               <div class="col-sm-6 col-lg-4">
                    <div class="card text-white bg-primary">
                    <div class="card-body pb-0">

                            @if(Auth::user()->status == null)

                                <div class="card">
                                    <div class="card-header" style="background-color: pink">
                                        <h6 style="color: black">
                                            Send Voucher Image to Admin
                                        </h6>
                                    </div>
                                    {{-- onclick="return confirm('Are you sure you want to send?')" --}}
                                    <div class="card-body">
                                        <form action="{{url('admin/send_voucher_to_admin/'.Auth::user()->id)}}" method="POST" enctype="multipart/form-data">
                                            @csrf
                                            <div class="input-group mb-3">
                                                <input type="file" name="voucher" class="form-control" style="padding-top: 2px">
                                                <div class="input-group-append">
                                                    <button class="btn btn-primary">
                                                        Send
                                                    </button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>

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
                    </div>
              </div>
              <!-- /.col-->
              @endif
            </div>
            <!-- /.row-->



          </div>
        </div>

@endsection
