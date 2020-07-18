@extends('admins.layouts.master')
@section('title')
<a href="{{ url('admin/experience_level') }}" class="title-color">Experience_level</a>
@endsection
@section('content')

<div class="container-fluid">
    <div class="animated fadeIn">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">

                        @if(empty($experience_level->id))
                        <strong>Experience_level</strong>
                        <small>Create Form</small>
                        <form action="{{ url('admin/experience_level') }}" method="POST" enctype="multipart/form-data">
                        @else
                        <strong>Experience_level</strong>
                        <small>Update Form</small>
                        <form action="{{ url('admin/experience_level/'.$experience_level->id) }}" method="POST" enctype="multipart/form-data">
                        @method('PATCH')
                        @endif
                        @csrf
                    </div>

                    <div class="card-body">
                        <div class="row">

                            <div class="col-sm-12">
                                <div class="form-group">
                                    <label for="name">Experience_level</label>
                                    <input class="form-control @error('name') is-invalid @enderror" name="name" id="name" type="text" placeholder="Enter Experience_level" value="{{ old('name')  ??  $experience_level->name ?? '' }}" required>
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