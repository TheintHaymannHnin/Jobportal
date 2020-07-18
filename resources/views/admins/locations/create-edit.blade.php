@extends('admins.layouts.master')
@section('title')
<a href="{{ url('admin/location') }}" class="title-color">Location</a>
@endsection
@section('content')

<div class="container-fluid">
    <div class="animated fadeIn">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">

                        @if(empty($location->id))
                        <strong>Location</strong>
                        <small>Create Form</small>
                        <form action="{{ url('admin/location') }}" method="POST" enctype="multipart/form-data">
                        @else
                        <strong>Location</strong>
                        <small>Update Form</small>
                        <form action="{{ url('admin/location/'.$location->id) }}" method="POST" enctype="multipart/form-data">
                        @method('PATCH')
                        @endif
                        @csrf
                    </div>

                    <div class="card-body">
                        <div class="row">

                            <div class="col-sm-12">
                                <div class="form-group">
                                    <label for="name">Location</label>
                                    <input class="form-control @error('name') is-invalid @enderror" name="name" id="name" type="text" placeholder="Enter Location" value="{{ old('name')  ??  $type->name ?? '' }}" required>
                                    @error('name')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $name }}</strong>
                                        </span>
                                    @enderror
                                </div>
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