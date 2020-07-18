@extends('admins.layouts.master')
@section('title')
<a href="{{ url('admin/company') }}" class="title-color">Company</a>
@endsection
@section('content')

<div class="container-fluid">
    <div class="animated fadeIn">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">

                        @if(empty($company->id))
                        <strong>Company </strong>
                        <small>Create Form</small>
                        <form action="{{ url('admin/company') }}" method="POST" enctype="multipart/form-data">
                        @else
                        <strong>Company </strong>
                        <small>Update Form</small>
                        <form action="{{ url('admin/company/'.$company->id) }}" method="POST" enctype="multipart/form-data">
                        @method('PATCH')
                        @endif
                        @csrf
                    </div>

                    <div class="card-body">
                        <div class="row">

                            <div class="col-sm-12">
                                <div class="form-group">
                                    <label for="name">Company Name</label>
                                    <input class="form-control @error('name') is-invalid @enderror" name="name" id="name" type="text" placeholder="Enter company name" value="{{ old('name')  ??  $company->name ?? '' }}" required>
                                    @error('name')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $name }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="col-sm-12">  
                                <div class="form-group">
                                    <label class="col-form-label" for="address">Address</label><br>
                                    <textarea class="form-control @error('address') is-invalid @enderror" name="address" id="address" required>{{ old('address')  ??  $company->address ?? '' }}</textarea>
                                    @error('address')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $address}}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label for="phonenumber">Phone Number</label>
                                    <input class="form-control @error('phone number') is-invalid @enderror" name="phonenumber" id="phonenumber" type="text" placeholder="Enter phone number" value="{{ old('phonenumber')  ??  $company->phonenumber ?? '' }}" required>
                                    @error('phonenumber')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $phonenumber }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label for="email">Email</label>
                                    <input class="form-control @error('email') is-invalid @enderror" name="email" id="email" type="text" placeholder="Enter E-mail" value="{{ old('email')  ??  $company->email ?? '' }}" required>
                                    @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $email }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label for="location_id">Location</label>
                                    <select name="location_id" id="location_id" class="form-control">
                                        @foreach($locations as $location)
                                        <option value="{{$location->id}}">{{$location->name}}</option>
                                        @endforeach
                                    </select>
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