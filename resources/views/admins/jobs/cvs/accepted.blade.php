@extends('admins.layouts.master')
@section('title')
<a href="" class="title-color">CV Accepted</a>
@endsection
@section('content')

<div class="card">
    <div class="card-header">
        <h4>Accepted CV Forms</h4>
    </div>
    <div class="card-body">
        <table class="table table-bordered table-hover">
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach($cvs as $cv)
                <tr>
                    <td>{{$cv->user->name}}</td>
                    <td>
                        <a href="{{url('admin/job/show_cv_form/'.$cv->id)}}" class="btn btn-info">
                           <i class="fa fa-plus-circle"></i> View CV
                        </a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    <div class="card-footer">
    </div>
</div>

@endsection
