@extends('admins.layouts.master')
@section('title')
<a href="{{ url('admin/cv') }}" class="title-color">CV</a>
@endsection
@section('content')
<div class="card-body">

    <div class="card">
        <div class="card-header">
            <a href="{{ url('/admin/cv/create')}}"><button class="btn btn-success float-right">+</button></a>
        </div>
        <div class="table-responsive">
        <table class="table  table-bordered">
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Father Name</th>
                    <th>Mother Name</th>
                    <th>Gender</th>
                    <th>Date of birth</th>
                    <th>Email</th>
                    <th>NRC</th>
                    <th>Address</th>
                    <th>Phone Number</th>
                    <th>Religion</th>
                    <th>Race</th>
                    <th>Material Status</th>
                    <th>Applied Position </th>
                    <th>Professional Area</th>
                    <th>Total Experience</th>
                    <th>Education-University</th>
                    <th>Education-Level</th>
                    <th>Education-Major</th>
                    <th>Past_experience_1_title</th>
                    <th>Past_experience_1_company</th>
                    <th>Past_experience_1_duration</th>
                    <th>Past_experience_1_function</th>
                    <th>Other-Qualifications </th>
                    <th> Expected-Salary</th>
                   
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach($cvs as $cv)
                <tr>
                    <td>{{ $cv->name }}</td>
                    <td>{{ $cv->father_name}}</td>
                    <td>{{ $cv->mother_name }}</td>
                    <td>{{ $cv->gender }}</td>
                    <td>{{ $cv->date_of_birth }}</td>
                    <td>{{ $cv->email}}</td>
                    <td>{{ $cv->nrc}}</td>
                    <td>{{ $cv->phone_number }}</td>
                    <td>{{ $cv->religion }}</td>
                    <td>{{ $cv->race }}</td>
                    <td>{{ $cv->material_status }}</td>
                    <td>{{ $cv->applied_position }}</td>
                    <td>{{ $cv->professional_area }}</td>
                    <td>{{ $cv->total_experience}}</td>
                    <td>{{ $cv->education_university }}</td>
                    <td>{{ $cv->education_level}}</td>
                    <td>{{ $cv->edicstion_major}}</td>
                    <td>{{ $cv->past_experience_1_title }}</td>
                    <td>{{ $cv->past_experience_1_company }}</td>
                    <td>{{ $cv->past_experience_1_duration }}</td>
                    <td>{{ $cv->past_experience_1_function}}</td>
                    <td>{{ $cv->other_qualification }}</td>
                    <td>{{ $cv->expected_salary }}</td>
                    
                   
                    
                    <td>
                    <form action="{{ url('admin/cv/'.$cv->id) }}" method="POST">
                        @csrf
                        @method('delete')
                        <a class="btn btn-info btn-sm mb-1" href="{{ url('admin/cv/'.$cv->id.'/edit') }}">
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