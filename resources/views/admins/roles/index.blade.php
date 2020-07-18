@extends('admins.layouts.master')
@section('title')
<a href="{{ url('admin/roles') }}" class="title-color">Role</a>
@endsection
@section('content')
<div class="container-fluid">

        <div class="card">
            <div class="card-header">
                <div class="row">
                    <div class="col-4">
                        <h5>Role List</h5>
                    </div>
                    <div class="col-8">
                            @permitTo('CreateRole')
                            <a href="{{ url('admin/main/role/create')}}" class="btn btn-primary ml-3 float-right">+ Add Role</a>
                            @endpermitTo
                    </div>
                </div>
            </div>
            <div class="card-body">
            <div class="table-responsive">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>Name</th>
                                <th>Admin Count</th>
                                <th>Permission</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                        @include('multiauth::message')
                        @foreach ($roles as $role)
                        <tr>
                            <td>{{ $role->name }}</td>
                            <td>
                            <span class="badge badge-primary badge-pill">{{ $role->admins->count() }} {{
                                ucfirst(config('multiauth.prefix')) }}</span>
                            </td> 
                            <td>   
                            <span class="badge badge-warning badge-pill">{{ $role->permissions->count() }}
                                Permissions</span>
                            </td>  
                            <td>  
                                @permitTo('DeleteRole,UpdateRole')
                                <a href="" class="btn btn-sm btn-secondary mr-3"
                                    onclick="event.preventDefault(); document.getElementById('delete-form-{{ $role->id }}').submit();">Delete</a>
                                <form id="delete-form-{{ $role->id }}"
                                    action="{{ route('admin.main.role.delete',$role->id) }}" method="POST"
                                    style="display: none;">
                                    @csrf @method('delete')
                                </form>
                                @endpermitTo

                                @permitTo('UpdateRole')
                                <a href="{{ route('admin.main.role.edit',$role->id) }}"
                                    class="btn btn-sm btn-primary mr-3">Edit</a>
                                @endpermitTo
                            </td>
                        @endforeach
                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection