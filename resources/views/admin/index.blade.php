@extends('layouts.header')


@section('content')

<a class="nav-link" id="log-out"href="{{ url('/logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();"> Logout </a>
                    <form id="logout-form" action="{{ url('/logout') }}" method="POST">
                    @csrf
                    </form>

				<div class="modal-body">
					<form method="POST" action="{{ route('register') }}">
						@csrf
						<h5 class="text-center text-primary"><strong>Register</strong></h5>
						<div class="form-group" id="loginFormEmail">
							<input type="text" class="form-control" placeholder="Full Name" name="name">
						</div>
						<div class="form-group" id="loginFormEmail">
							<input type="address" class="form-control" placeholder="Address" name="address">
						</div>
						<div class="form-group" id="loginFormEmail">
							<input type="email" class="form-control" placeholder="Email" name="email">
						</div>
						<div class="form-group" id="loginFormPassword">
							<input type="text" class="form-control" placeholder="Phone Number" name="phone_number">
						</div>
						<div class="form-group" id="loginFormEmail">
							<input type="password" class="form-control" placeholder="Password" name="password">
						</div>
						<div class="form-group" id="loginFormEmail">
							<input type="password" class="form-control" placeholder="Confirm Password" name="password_confirmation">
						</div>
						<button type="submit" class="btn btn-primary mb-2">Register</button>
					</form>
				</div>




@endsection
