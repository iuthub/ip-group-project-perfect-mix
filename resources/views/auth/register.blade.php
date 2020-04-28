@extends('layouts.fantasy')
@extends('LoginNav.loginNav')
@section('content')
<div class="container" >
  <div class="loginscreen">
    <div class="row justify-content-center">

            <div class="card">

                <div class="main">
                   <p class="sign" align="center">{{ __('Create New Account') }}</p>
                    <form method="POST" class="form1" action="{{ route('login') }}">
                        @csrf
                          <div>
                          <!--  <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>
                          -->
                          <div >
                              <input id="name" align="center" type="name" class="name @error('name') is-invalid @enderror" placeholder="Name" name="name" value="{{ old('name') }}" required autofocus>

                              @error('name')
                                  <span class="invalid-feedback" role="alert">
                                      <strong>{{ $message }}</strong>
                                  </span>
                              @enderror
                          </div>

                            <div >
                                <input id="email" align="center" type="email" class="un @error('email') is-invalid @enderror" placeholder="Email" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>



                          <!--  <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>
                          -->

                                <input id="password" align="center" placeholder="Password" type="password" class="pass @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror



                                    <div >
                                        <input id="password-confirm" type="password" class="passwordConfirm" name="password_confirmation" required>
                                    </div>


                            <div >
                              <a class="submit" align="center">{{'Sign Up'}}</a>


                                 <p class="register" align="center"><a href="#">  {{ __('Log In') }}</p>
                            </div>

                    </form>

        </div>
    </div>
  </div>

@endsection
