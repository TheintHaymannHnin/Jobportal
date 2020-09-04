@extends('admins.layouts.master')
@section('title')
<a href="" class="title-color">
    CV
    @if($cv->status == 'request')
        Request
    @elseif($cv->status == 'accepted')
        Accepted
    @else
        Rejected
    @endif
</a>
@endsection
@section('content')

    <div class="row">
        <div class="col-md-2"></div>
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header bg-info">
                        <h4 class="text-center">{{ strtoupper($cv->user->name) }}'S CV FORM</h4>
                    </div>
                    <div class="card-body">
                        <div class="row mb-2">
                            <div class="col-md-6">
                                <strong>Position :</strong>
                            </div>
                            <div class="col-md-6">
                                {{ $cv->job->name }}
                            </div>
                        </div>
                        <div class="row mb-2">
                            <div class="col-md-6">
                                <strong>Name :</strong>
                            </div>
                            <div class="col-md-6">
                                {{ $cv->user->name }}
                            </div>
                        </div>
                        <div class="row mb-2">
                            <div class="col-md-6">
                                <strong>Father Name :</strong>
                            </div>
                            <div class="col-md-6">
                                {{ $cv->father_name }}
                            </div>
                        </div>
                        <div class="row mb-2">
                            <div class="col-md-6">
                                <strong>Mother Name :</strong>
                            </div>
                            <div class="col-md-6">
                                {{ $cv->mother_name }}
                            </div>
                        </div>
                        <div class="row mb-2">
                            <div class="col-md-6">
                                <strong>Gender :</strong>
                            </div>
                            <div class="col-md-6">
                                {{ $cv->gender }}
                            </div>
                        </div>
                        <div class="row mb-2">
                            <div class="col-md-6">
                                <strong>Date of Birth :</strong>
                            </div>
                            <div class="col-md-6">
                                {{ $cv->dob }}
                            </div>
                        </div>
                        <div class="row mb-2">
                            <div class="col-md-6">
                                <strong>Email :</strong>
                            </div>
                            <div class="col-md-6">
                                {{ $cv->email }}
                            </div>
                        </div>
                        <div class="row mb-2">
                            <div class="col-md-6">
                                <strong>NRC :</strong>
                            </div>
                            <div class="col-md-6">
                                {{ $cv->nrc }}
                            </div>
                        </div>
                        <div class="row mb-2">
                            <div class="col-md-6">
                                <strong>Phone :</strong>
                            </div>
                            <div class="col-md-6">
                                {{ $cv->phone }}
                            </div>
                        </div>
                        <div class="row mb-2">
                            <div class="col-md-6">
                                <strong>Address :</strong>
                            </div>
                            <div class="col-md-6">
                                {{ $cv->address }}
                            </div>
                        </div>
                        <div class="row mb-2">
                            <div class="col-md-6">
                                <strong>Religion :</strong>
                            </div>
                            <div class="col-md-6">
                                {{ $cv->religion }}
                            </div>
                        </div>
                        <div class="row mb-2">
                            <div class="col-md-6">
                                <strong>Race :</strong>
                            </div>
                            <div class="col-md-6">
                                {{ $cv->race }}
                            </div>
                        </div>
                        <div class="row mb-2">
                            <div class="col-md-6">
                                <strong>Marital Status :</strong>
                            </div>
                            <div class="col-md-6">
                                {{ $cv->marital_status }}
                            </div>
                        </div>
                        <div class="row mb-2">
                            <div class="col-md-6">
                                <strong>Expected Salary :</strong>
                            </div>
                            <div class="col-md-6">
                                {{ $cv->expected_salary }}
                            </div>
                        </div>
                    </div>
                    <div class="card-footer">
                        <form method="POST">
                            @csrf
                            @if($cv->status == 'accepted')
                                <button type="submit" formaction="{{url('admin/job/reject_cv/'.$cv->id)}}" class="btn btn-danger" onclick="return confirm('Are you sure you want to reject?')">
                                    Reject
                                </button>
                            @elseif($cv->status == 'rejected')
                                <button type="submit" formaction="{{url('admin/job/accept_cv/'.$cv->id)}}" class="btn btn-success" onclick="return confirm('Are you sure you want to accept?')">
                                    Accept
                                </button>
                            @else
                                <button type="submit" formaction="{{url('admin/job/accept_cv/'.$cv->id)}}" class="btn btn-success" onclick="return confirm('Are you sure you want to accept?')">
                                    Accept
                                </button>
                                <button type="submit" formaction="{{url('admin/job/reject_cv/'.$cv->id)}}" class="btn btn-danger" onclick="return confirm('Are you sure you want to reject?')">
                                    Reject
                                </button>
                            @endif
                        </form>
                    </div>
                </div>
        </div>
        <div class="col-md-2"></div>
    </div>

@endsection
