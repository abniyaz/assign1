@extends('layouts.app') 
@section('content')
<div class="container">
    <div class="card card-register mx-auto mt-5 old_transparent">
        <div class="card-header">Register an Account</div>
        <div class="card-body">
            <form method="POST" action="{{ route('register') }}">
                @csrf
                <div class="form-group">
                    <div class="form-row">
                        <div class="col-md-6">
                            <div class="form-label-group">
                                <input type="text" id="name" placeholder="Name" required="required" autofocus="autofocus" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}"
                                    name="name" value="{{ old('name') }}" required autofocus>                                @if ($errors->has('name'))
                                <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('name') }}</strong>
                                        </span> @endif
                                <label for="name">Name</label>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-label-group">
                                <input type="text" id="mNumber" name="mNumber" value="{{ old('mNumber') }}" class="form-control" placeholder="Mobile number"
                                    required="required">
                                <label for="mNumber">Mobile number</label>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <div class="form-row">
                        <div class="col-md-6">
                            <div class="form-label-group">
                                <div class="radio">
                                    <label><input type="radio" name="utype" value="1" required>  Senior Help User</label>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-label-group">
                                <div class="radio">
                                    <label><input type="radio" name="utype" value="2" >  Service Provider</label>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <div class="form-label-group">
                        <input type="email" id="email" placeholder="Email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email"
                            value="{{ old('email') }}" required> @if ($errors->has('email'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('email') }}</strong>
                        </span> @endif
                        <label for="email">Email</label>
                    </div>
                </div>
                <div class="form-group">
                    <div class="form-row">
                        <div class="col-md-6">
                            <div class="form-label-group">
                                <input type="password" id="password" placeholder="Password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}"
                                    name="password" required> @if ($errors->has('password'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('password') }}</strong>
                                </span> @endif
                                <label for="password">Password</label>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-label-group">
                                <input type="password" id="password-confirm" placeholder="Confirm password" class="form-control" name="password_confirmation"
                                    required>
                                <label for="password-confirm">Confirm password</label>
                            </div>
                        </div>
                    </div>
                </div>
                <button type="submit" class="btn btn-primary btn-block">
                        {{ __('Register') }}
                    </button>
            </form>
            <div class="text-center">
                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                <a class="nav-link" href="forgot-password.html">Forgot Password?</a>
            </div>
        </div>
    </div>
</div>
@endsection