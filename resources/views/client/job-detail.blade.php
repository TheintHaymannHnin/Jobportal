@extends('client.layouts.client')

@section('index')
    <div class="container" style="margin-top: 80px">
        <div class="row">
            <div class="col-md-2"></div>
            <div class="col-md-8">
                <div class="card mt-4 mb-4">
                    <div class="card-header">
                        <div class="row">
                            <div class="col-md-6">
                                 <strong><h5>Job Information</h5></strong>
                            </div>
                            <div class="col-md-6">
                                <a href="{{url('/cv_form/'.$job->id)}}" class="btn btn-success float-right">Apply Job</a>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="row mb-3">
                            <div class="col-md-6">
                                <span class="text-dark"><strong>Name</strong></span>
                            </div>
                            <div class="col-md-6">
                                <span class="text-dark">: {{$job->name}}</span>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-md-6">
                                <span class="text-dark"><strong>Position</strong></span>
                            </div>
                            <div class="col-md-6">
                                <span class="text-dark">: {{$job->position}}</span>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-md-6">
                                <span class="text-dark"><strong>Salary</strong></span>
                            </div>
                            <div class="col-md-6">
                                <span class="text-dark">: {{$job->salary}}</span>
                            </div>
                        </div>
                         <div class="row mb-3">
                            <div class="col-md-6">
                                <span class="text-dark"><strong>Requirement</strong></span>
                            </div>
                            <div class="col-md-6">
                                <span class="text-dark">: {{$job->requirement}}</span>
                            </div>
                        </div>
                         <div class="row mb-3">
                            <div class="col-md-6">
                                <span class="text-dark"><strong>Description</strong></span>
                            </div>
                            <div class="col-md-6">
                                <span class="text-dark">: {{$job->description}}</span>
                            </div>
                        </div>
                         <div class="row mb-3">
                            <div class="col-md-6">
                                <span class="text-dark"><strong>Category</strong></span>
                            </div>
                            <div class="col-md-6">
                                <span class="text-dark">: {{$job->category->name}}</span>
                            </div>
                        </div>
                         <div class="row mb-3">
                            <div class="col-md-6">
                                <span class="text-dark"><strong>Company</strong></span>
                            </div>
                            <div class="col-md-6">
                                <span class="text-dark">: {{$job->company->name}}</span>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <span class="text-dark"><strong>Type</strong></span>
                            </div>
                            <div class="col-md-6">
                                <span class="text-dark">: {{$job->type->name}}</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-2"></div>
        </div>
    </div>
@endsection

