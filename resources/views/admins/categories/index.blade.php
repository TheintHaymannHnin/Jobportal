@extends('admins.layouts.master')
@section('title')
<a href="{{ url('admin/category') }}" class="title-color">Category</a>
@endsection
@section('content')
<div class="card">
    <div class="card-header">
        <a href="{{ url('/admin/category/create')}}"><button class="btn btn-success float-right">+</button></a>
    </div>
    <div class="card-body table-responsive">
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Name</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach($categories as $key => $category)
                <tr>
                    <td>{{$key + $categories->firstItem()}}</td>
                    <td>{{ $category->name }}</td>
                    <td>
                    <form action="{{ url('/admin/category/'.$category->id) }}" method="POST">
                        @csrf
                        @method('delete')
                        <a class="btn btn-info btn-sm mb-1" href="{{ url('/admin/category/'.$category->id.'/edit') }}">
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
    <div class="card-footer">
        {{ $categories->links() }}
    </div>
</div>

@endsection
