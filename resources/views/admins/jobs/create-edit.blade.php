@extends('admins.layouts.master')
@section('title')
<a href="{{ url('admin/job') }}" class="title-color">Job</a>
@endsection
@section('content')

<div class="container-fluid">
    <div class="animated fadeIn">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">

                        @if(empty($job->id))
                        <strong>Job </strong>
                        <small>Create Form</small>
                        <form action="{{ url('admin/job') }}" method="POST" enctype="multipart/form-data">
                        @else
                        <strong>Job </strong>
                        <small>Update Form</small>
                        <form action="{{ url('admin/job/'.$job->id) }}" method="POST" enctype="multipart/form-data">
                        @method('PATCH')
                        @endif
                        @csrf
                    </div>

                    <div class="card-body">
                        <div class="row">

                            <div class="col-sm-12">
                                <div class="form-group">
                                    <label for="name">Job Name</label>
                                    <input class="form-control @error('name') is-invalid @enderror" name="name" id="name" type="text" placeholder="Enter Job name" value="{{ old('name')  ??  $job->name ?? '' }}" required>
                                    @error('name')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $name }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label for="position">Position</label>
                                    <select name="position" id="" class="form-control">
                                        <option value="">Select Postion</option>
                                        <option value="Junior">Junior</option>
                                        <option value="Senior">Senior</option>
                                    </select>
                                    @error('position')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $position}}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label for="salary">Salary</label>
                                    <input class="form-control @error('salary') is-invalid @enderror" name="salary" id="salary" type="text" placeholder="Enter salary" value="{{ old('salary')  ??  $job->salary ?? '' }}" required>
                                    @error('salary')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $salary }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="col-sm-12">
                                <div class="form-group">
                                    <label class="col-form-label" for="requirement">Requirement</label><br>
                                    <textarea class="form-control @error('requirement') is-invalid @enderror" name="requirement" id="requirement" value="{{ old('requirement')  ??  $job->requirement ?? '' }}" required placeholder="Enter requirements"></textarea>
                                    @error('requirement')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $requirement }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                           <div class="col-sm-12">
                                <div class="form-group">
                                    <label class="col-form-label" for="description">Description</label><br>
                                    <textarea class="form-control @error('description') is-invalid @enderror" name="description" id="description" value="{{ old('description')  ??  $job->description ?? '' }}" required placeholder="Enter Description"></textarea>
                                    @error('description')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $description }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label for="category_id">Category Name</label>

                                    <select name="category_id" id="category_id" class="form-control">
                                        @foreach($categories as $category)
                                        <option value="{{$category->id}}">{{$category->name}}</option>
                                        @endforeach
                                    </select>

                                </div>
                            </div>

                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label for="type"> Job Type</label>
                                    <select name="type_id" id="type_id" class="form-control">
                                        @foreach($types as $type)
                                        <option value="{{$type->id}}">{{$type->name}}</option>
                                        @endforeach
                                    </select>
                                </div>

                                <input type="hidden" name="company_id" value="{{Auth::user()->id}}">
                            </div>

                             </div>
                    </div>

                    <div class="card-footer">
                        <button class="btn btn-sm btn-primary" type="submit">
                            <i class="fa fa-dot-circle-o"></i> Submit</button>
                            <button class="btn btn-sm btn-danger" type="reset">
                                <i class="fa fa-ban"></i> Reset</button>
                            </div>
                        </div>
                    </div>
                </div>

            </form>
        </div>
    </div>
</div>

@endsection
