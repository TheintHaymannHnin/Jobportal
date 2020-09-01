@extends('admins.layouts.master')
@section('title')
<a href="{{ url('admin/type') }}" class="title-color">Type</a>
@endsection
@section('content')
<div class="card-body">

    <div class="card">
        <div class="card-header">
            <a href="{{ url('admin/type/create')}}"><button class="btn btn-success float-right">+</button></a>
        </div>
        <div class="table-responsive">
        <table class="table  table-bordered">
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Description</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach($types as $type)
                <tr>
                    <td>{{ $type->name }}</td>
                    <td>{{ $type->description }}</td>
                    <td>
                    <form action="{{ url('admin/type/'.$type->id) }}" method="POST">
                        @csrf
                        @method('delete')
                        <a class="btn btn-info btn-sm mb-1" href="{{ url('admin/type/'.$type->id.'/edit') }}">
                        <i class="fa fa-edit"></i>
                        </a>
                        <button class="btn btn-danger btn-sm mb-1" onclick="myFunction()"><i class="fa fa-trash"></i></button>
                    </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    </div>
</div>

@endsection
