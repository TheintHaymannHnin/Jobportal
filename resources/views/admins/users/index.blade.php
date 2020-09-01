@extends('admins.layouts.master')
@section('title')
<a href="{{ url('admin/category') }}" class="title-color">User</a>
@endsection
@section('content')

<div class="container">
    <div class="row">
        <div class="card">
            <div class="card-header">
                <div class="card-title">User List</div>
            </div>
            <div class="card-body table-responsive">
                <table class="table table-bordered table-hover">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Phone</th>
                            <th>Address</th>
                            <th>Role</th>
                            <th>Status</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($users as $index => $user)
                        <tr>
                            <td>{{$index + 1}}</td>
                            <td>{{ $user->name }}</td>
                            <td>{{ $user->email }}</td>
                            <td>{{ $user->phone }}</td>
                            <td>{{ $user->address }}</td>
                            <td>
                                <span class="badge badge-primary">{{ $user->role }}</span>
                            </td>
                            <td>{{$user->status}}</td>
                            <td>
                                @if($user->status == 'accepted')
                                    <span class="badge badge-primary">approved</span>
                                @endif
                                @if($user->status == 'request')
                                    <form action="{{url('admin/approve_company/'.$user->id)}}" method="POST">
                                        @csrf
                                        <button type="submit" class="btn btn-success btn-sm" onclick="return confirm('Are you sure you want to approve?')">
                                            <i class="fas fa-check-circle"></i> Approve
                                        </button>
                                    </form>
                                @endif
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            <div class="card-footer">
            </div>
        </div>
    </div>
</div>

@endsection
