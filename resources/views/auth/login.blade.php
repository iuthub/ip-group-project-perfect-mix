@extends('layouts.fantasy')
@extends('LoginNav.loginNav')
@section('content')
<div class="container" >
  <div class="loginscreen">
    <div class="row justify-content-center">
        <div >
            <div class="card">

                <div class="main">
                   <p class="sign" align="center">{{ __('Login') }}</p>
                    <form method="POST" class="form1" action="{{ url('/login') }}">
                        @csrf

                        <div >
                          <!--  <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>
                          -->
                            <div >
                                <input id="email" align="center" type="email" class="un @error('email') is-invalid @enderror" placeholder="Email" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div >
                          <!--  <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>
                          -->
                            <div >
                                <input id="password" align="center" placeholder="Password" type="password" class="pass @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <!--...
                        <div class="form-group row">
                            <div class="col-md-6 offset-md-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                            </div>
                        </div>
                      -->
                        <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-4">
                              <button class="submit" align="center">{{'Log In'}}</button>

                                @if (Route::has('password.request'))
                                  <p class="forgot" align="center"><a href="{{ url('/password/reset') }}">{{'Forgot Password?'}}</p>
                                @endif
                                 <p class="register" align="center"><a href="{{route('register') }}">  {{ __('Sign Up') }}</p>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
  </div>
</div>
@endsection
