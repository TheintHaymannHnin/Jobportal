@extends('admins.layouts.master')
@section('title')
<a href="{{ url('admin/type') }}" class="title-color">Type</a>
@endsection
@section('content')

<div class="container-fluid">
    <div class="animated fadeIn">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">

                        @if(empty($type->id))
                        <strong>Type </strong>
                        <small>Create Form</small>
                        <form action="{{ url('admin/type') }}" method="POST" enctype="multipart/form-data">
                        @else
                        <strong>Type</strong>
                        <small>Update Form</small>
                        <form action="{{ url('admin/type/'.$type->id) }}" method="POST" enctype="multipart/form-data">
                        @method('PATCH')
                        @endif
                        @csrf
                    </div>

                    <div class="card-body">
                        <div class="row">

                            <div class="col-sm-12">
                                <div class="form-group">
                                    <label for="name">Type</label>
                                    <input class="form-control @error('name') is-invalid @enderror" name="name" id="name" type="text" placeholder="Enter job types" value="{{ old('name')  ??  $type->name ?? '' }}" required>
                                    @error('name')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $name }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="col-sm-3">
                                <div class="form-group">
                                    <label class="col-form-label" for="description">Description</label><br>
                                    <textarea class="form-control @error('description') is-invalid @enderror" name="description" id="description" required>{{ old('description')  ??  $type->description ?? '' }}</textarea>
                                    @error('description')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $description }}</strong>
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