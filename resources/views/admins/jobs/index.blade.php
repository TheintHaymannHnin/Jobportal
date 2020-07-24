@extends('admins.layouts.master')
@section('title')
<a href="{{ url('admin/job') }}" class="title-color">Job</a>
@endsection
@section('content')
<div class="card">
    <div class="card-header">
        <a href="{{ url('/admin/job/create')}}"><button class="btn btn-success float-right">+</button></a>
    </div>
    <div class="card-body">
        <div class="table-responsive">
        <table class="table  table-bordered">
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Category</th>
                    <th>Company</th>
                    <th>Type</th>
                    <th>Position</th>
                    <th>Salary</th>
                    <th>Requirement</th>
                    <th>Description</th>
                    <th>Action</th>
                    <th>CV Forms</th>
                </tr>
            </thead>
            <tbody>
                @foreach($jobs as $job)
                <tr>
                    <td>{{ $job->name }}</td>
                    <td>{{ $job->category['name'] }}</td>
                    <td>{{ $job->company['name'] }}</td>
                    <td>{{ $job->type['name'] }}</td>
                    <td>{{ $job->position }}</td>
                    <td>{{ $job->salary }}</td>
                    <td>{{ $job->requirement }}</td>
                    <td>{{ $job->description }}</td>
                    <td>
                    <form action="{{ url('admin/job/'.$job->id) }}" method="POST">
                        @csrf
                        @method('delete')
                        <a class="btn btn-info btn-sm mb-1" href="{{ url('admin/job/'.$job->id.'/edit') }}">
                        <i class="fa fa-edit"></i>
                        </a>
                        <button class="btn btn-danger btn-sm mb-1" onclick="myFunction()"><i class="fa fa-trash"></i></button>
                    </form>
                    </td>
                    <td>
                        <a href="{{url('admin/job/'.$job->id.'/request_cvs')}}" class="btn btn-primary btn-sm mb-1">
                            Request <span class="badge badge-secondary">3</span>
                         </a>
                        <a href="" class="btn btn-success btn-sm mb-1">
                            Accepted <span class="badge badge-secondary">3</span>
                         </a>
                        <a href="" class="btn btn-danger btn-sm">
                            Rejected <span class="badge badge-secondary">3</span>
                         </a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    </div>
    <div class="card-footer">
    </div>
</div>

@endsection
