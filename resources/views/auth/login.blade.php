@extends('layouts.app') 
@section('content')
<div class="container">
    <div class="card card-login mx-auto mt-5 old_transparent">
        <div class="card-header">{{ __('Login') }}</div>
        <div class="card-body">
            <form method="POST" action="{{ route('login') }}">
                @csrf
                <div class="form-group">
                    <div class="form-label-group">
                        <input type="email" id="email" placeholder="Email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}"
                            class="form-control" placeholder="Email address" required="required" autofocus="autofocus">
                        <label for="email">Email</label> @if ($errors->has('email'))
                        <span class="invalid-feedback" role="alert">
                              <strong>{{ $errors->first('email') }}</strong>
                          </span> @endif
                    </div>
                </div>
                <div class="form-group">
                    <div class="form-label-group">
                        <input id="password" type="password" placeholder="Password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password"
                            required>
                        <label for="inputPassword">Password</label> @if ($errors->has('password'))
                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('password') }}</strong>
                            </span> @endif
                    </div>
                </div>
                <div class="form-group">
                    <div class="checkbox">
                        <label>
                            <input type="checkbox"  name="remember" id="remember" {{ old( 'remember') ? 'checked' : '' }}>
                            Remember me
                          </label>
                    </div>
                </div>
                <button type="submit" class="btn btn-primary btn-block">
                        {{ __('Login') }}
                    </button>
            </form>
            <div class="text-center">
                <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                <a class="nav-link" href="forgot-password.html">Forgot Password?</a>
            </div>
        </div>
    </div>
</div>
@endsection