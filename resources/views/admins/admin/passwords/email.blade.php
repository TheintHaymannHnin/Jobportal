@extends('admins.layouts.master')
@section('title')
<a href="{{ url('admin/admin') }}" class="title-color">Admins</a>
@endsection
@section('content')
<div class="container-fluid">

        <div class="card">
            <div class="card-header">
                <div class="row">
                    <div class="col-4">
                    <h5>Reset{{ ucfirst(config('multiauth.prefix')) }} Password</h5>
                    </div>
                    <div class="col-8">
                    <form method="POST" action="{{ route('admin.password.email') }}" aria-label="{{ __('Reset Admin Password') }}">
                        @csrf
                
                    </div>
                </div>
            </div>

                <div class="card-body">
                    @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                    @endif

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}"
                                    required> @if ($errors->has('email'))
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span> @endif
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Send Password Reset Link') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection