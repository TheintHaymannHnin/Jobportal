@extends('admins.layouts.master')
@section('title')
<a href="{{ url('admin/experience_level') }}" class="title-color">Experience_level</a>
@endsection
@section('content')
<div class="card-body">

    <div class="card">
        <div class="card-header">
            <a href="{{ url('admin/experience_level/create')}}"><button class="btn btn-success float-right">+</button></a>
        </div>
        <div class="table-responsive">
        <table class="table  table-bordered">
            <thead>
                <tr>
                    <th>Name</th>
                    
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach($experience_levels as $experience_level)
                <tr>
                    <td>{{ $experience_level->name }}</td>
                    <td>
                    <form action="{{ url('admin/experience_level/'.$experience_level->id) }}" method="POST">
                        @csrf
                        @method('delete')
                        <a class="btn btn-info btn-sm mb-1" href="{{ url('admin/experience_level/'.$experience_level->id.'/edit') }}">
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