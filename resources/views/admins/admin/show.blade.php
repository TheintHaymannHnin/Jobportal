@extends('admins.layouts.master')
@section('title')
<a href="{{ url('admin/admin') }}" class="title-color">Admins</a>
@endsection
@section('content')
<div class="container-fluid">

        <div class="card">
            <div class="card-header">
                <div class="row">
                    <div class="col-4">
                    <h5>{{ ucfirst(config('multiauth.prefix')) }} List</h5>
                    </div>
                    <div class="col-8">
                   
                        <a href="{{route('admin.register')}}" class="btn btn-sm btn-success float-right">New {{ ucfirst(config('multiauth.prefix')) }}</a>
                
                    </div>
                </div>
            </div>
                <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>Name</th>
                                <th>Role</th>
                                <th>Status</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                        @include('multiauth::message')
                        @foreach ($admins as $admin)
                        <tr>
                            <td>{{ $admin->name }}</td>
                            @foreach ($admin->roles as $role)
                            <td>{{ $role->name }} </td> 
                            @endforeach 
                            <td>{{ $admin->active? 'Active' : 'Inactive' }}</td> 
                            <td>
                                <a href="#" class="btn btn-sm btn-secondary mr-3" onclick="event.preventDefault(); document.getElementById('delete-form-{{ $admin->id }}').submit();">Delete</a>
                                <form id="delete-form-{{ $admin->id }}" action="{{ route('admin.delete',[$admin->id]) }}" method="POST" style="display: none;">
                                    @csrf @method('delete')
                                </form>

                                <a href="{{route('admin.edit',[$admin->id])}}" class="btn btn-sm btn-primary mr-3">Edit</a>
                            </td> 
                        
                        </tr>
                        @endforeach 
                        @if($admins->count()==0)
                        <p>No {{ config('multiauth.prefix') }} created Yet, only super {{ config('multiauth.prefix') }} is available.</p>
                        @endif
                   </tbody>
                </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection