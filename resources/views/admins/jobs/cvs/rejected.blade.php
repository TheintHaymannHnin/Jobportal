@extends('admins.layouts.master')
@section('title')
<a href="" class="title-color">CV Rejected</a>
@endsection
@section('content')

<div class="card">
    <div class="card-header">
        <h4>Rejected CV Forms</h4>
    </div>
    <div class="card-body">
        <table class="table table-bordered table-hover">
            <thead>
                <tr>
                    <th>Name</th>
                </tr>
            </thead>
            <tbody>
                @foreach($cvs as $cv)
                <tr>
                    <td>{{$cv->user->name}}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    <div class="card-footer">
    </div>
</div>

@endsection
