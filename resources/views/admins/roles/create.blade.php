@extends('admins.layouts.master')
@section('title')
<a href="{{ url('admin/main/roles') }}" class="title-color">Role</a>
@endsection
@section('content')
<div class="container-fluid">
   <div class="card">
                    <div class="card-header">
                        <strong>Role </strong>
                        <small>Create Role</small>
                        @include('multiauth::message')
                        <form action="{{ route('admin.main.role.store') }}" method="post">
                        @csrf
                    </div>
                    <div class="card-body">
                        <div class="form-group">
                            <label for="role">Role Name</label>
                            <input type="text" placeholder="Give an awesome name for role" name="name"
                                class="form-control" id="role" required>
                        </div>
                        <div class="form-group">
                            <label for="role">Assign Permissions</label>
                            <div class="container">
                                @foreach($permissions as $key => $value)
                                <label for="role">{{$key}}</label>
                                <div class="d-flex justify-content-between">
                                    @foreach($value as $permission)
                                    <div class="form-group">
                                        <label for="{{$permission->id}}">{{$permission->name}}</label>
                                        <input type="checkbox" name="permissions[]" class="form-control"
                                            value="{{$permission->id}}" id="{{$permission->id}}">
                                    </div>
                                    @endforeach
                                </div>
                                @endforeach
                            </div>
                        </div>
                        <button type="submit" class="btn btn-primary btn-sm">Store</button>
                        <a href="{{ route('admin.main.roles') }}" class="btn btn-sm btn-danger float-right">Back</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection