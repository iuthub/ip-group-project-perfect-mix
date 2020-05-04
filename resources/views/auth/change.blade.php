@extends('layouts.header')

@extends('LoginNav.loginNav')

@section('content')
<div class="container" >
  <div class="loginscreen">
    <div class="row justify-content-center">

            <div class="card">
                <div class="main">
                   <p class="sign" align="center">{{ __('Edit Profile') }}</p>
                    
                    <form method="POST" class="form1" action="{{ url('/edit') }}">
                          @csrf
                        <div>
                      
                          <div>
                          <input id="name" align="center" 
                          type="name" 
                          class="name"
                          placeholder="Name" 
                          name="name" 
                          value="{{ $user->full_name }}" 
                          required autofocus>

                              @error('name')
                                  <span class="invalid-feedback" role="alert">
                                      <strong>{{ $message }}</strong>
                                  </span>
                              @enderror
                          </div>

                            <div >
                                <input id="email" align="center" 
                                type="email" 
                                class="name" 
                                placeholder="Email" 
                                name="email" 
                                value="{{ $user->email }}" 
                                required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div >
                                <input id="phone_number" align="center" 
                                type="" 
                                class="name" 
                                placeholder="Email" 
                                name="phone_number" 
                                value="{{ $user->phone_number }}" 
                                required autocomplete="phone_number" autofocus>

                                @error('phone_number')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            


                          {{--  <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>
                           --}}

                                <input id="password" align="center" placeholder="Password" type="password" class="pass @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror

                                    <div>
                                        <input id="password-confirm" type="password" class="passwordConfirm" name="password_confirmation" required>
                                    </div>

                            

                    </form>

        </div>
    </div>
  </div>

@endsection
