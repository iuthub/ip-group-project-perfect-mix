@extends('layouts.header')

@include('partials.navbar')

@section('content')
<section class="hero position-relative">
		<h3>Do you want to eat <strong>the delicious food</strong> in the world?</h3>
		<div class="hero-footer-image">
			<img src="assets/projectPhotos/ink white.png" alt="">
		</div>
	</section>
	<div class="container">
		<section class="our-work row">
			<div class="col-md-6 col-lg-6 col-sm-12 our-work-content">
				<h3 class="title">About Us</h3>
				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam id felis et ipsum bibendum ultrices. Morbi
					vitae
					pulvinar velit. Sed aliquam dictum sapien, id sagittis augue malesuada eu.</p>
			</div>
			<div class="col-md-6 col-lg-6 col-sm-12 our-work-image">
				<img src="assets/projectPhotos/food.png" alt="">
			</div>
		</section>

		<section class="features">
			<h3 class="title text-center">Why people <strong>choose us</strong>?</h3>
			<div class="row">
				<div class="col-md-4 col-lg-4 col-sm-12 feature">
					<img src="assets/projectPhotos/Group1.png" alt="">
					<h4 class="feature-content text-center">
						<strong>Delicious</strong> foods from <br>the popular <strong>chef</strong> cookers
					</h4>
				</div>
				<div class="col-md-4 col-lg-4 col-sm-12 feature">
					<img src="assets/projectPhotos/Group2.png" alt="">
					<h4 class="feature-content text-center">
						<strong>Delicious</strong> foods from <br>the popular <strong>chef</strong> cookers
					</h4>
				</div>
				<div class="col-md-4 col-lg-4 col-sm-12 feature">
					<img src="assets/projectPhotos/Group3.png" alt="">
					<h4 class="feature-content text-center">
						<strong>Fast</strong> delivery service
					</h4>
				</div>
			</div>
		</section>

		<section class="daily-food-str">
			<h3 class="title text-center"><img src="assets/projectPhotos/daily_food.png" alt=""></h3>
			<div class="row">
				<div class="col-md-4 col-lg-4 position-relative">
					<img src="assets/icons/ar_lb.png" alt="" class="ar-lb">
				</div>
				<div class="col-md-4 col-lg-4 col-sm-12 feature">
					<img class="type" src="assets/projectPhotos/breakfast.png" alt="">
					<h4 class="name text-center">Breakfast</h4>
				</div>
				<div class="col-md-4 col-lg-4 position-relative">
					<img src="assets/icons/ar_rb.png" alt="" class="ar-rb">
				</div>
				<div class="col-md-4 col-lg-4 col-sm-12 feature">
					<img class="type" src="assets/projectPhotos/dinner.png" alt="">
					<h4 class="name text-center">Dinner</h4>
				</div>
				<div class="col-md-4 col-lg-4"></div>
				<div class="col-md-4 col-lg-4 col-sm-12 feature">
					<img class="type" src="assets/projectPhotos/lunch.png" alt="">
					<h4 class="name text-center">Lunch</h4>
				</div>
			</div>
		</section>
<!--

		<section class="reviews">
			<h3 class="title">What others say:</h3>

			<p class="quote">Mauris sit amet mauris a arcu eleifend ultricies eget ut dolor. Class aptent taciti sociosqu ad
				litora torquent per conubia nostra, per inceptos himenaeos.</p>
			<p class="author">— Patrick Farrell</p>

			<p class="quote">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam id felis et ipsum bibendum
				ultrices. Morbi vitae pulvinar velit. Sed aliquam dictum sapien, id sagittis augue malesuada eu.</p>
			<p class="author">— George Smith</p>

			<p class="quote">Donec commodo dolor augue, vitae faucibus tortor tincidunt in. Aliquam vitae leo quis mi pulvinar
				ornare. Integer eu iaculis metus.</p>
			<p class="author">— Kevin Blake</p>


		</section> -->
	</div>

	<!-- Login Modal -->
	<div class="modal login-modal fade" id="loginWindow" tabindex="-1" role="dialog" aria-labelledby="loginWindowTitle" aria-hidden="true">
		<div class="modal-dialog modal-dialog-centered" role="document">
			<div class="modal-content position-relative">
				<div class="modal-header">
					<h5 class="modal-title" id="exampleModalLongTitle">Login Form</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body">
					<form method="POST" action="{{ route('login') }}">
                        @csrf
						<h5><strong>Log</strong> into <span class="text-primary">Account</span></h5>
						<div class="form-group" id="loginFormEmail">
							<input type="email" class="form-control" placeholder="Email" name="email">
						</div>
						<div class="form-group" id="loginFormPassword">
							<input type="password" class="form-control" placeholder="Password" name="password">
						</div>
						<button type="submit" class="btn btn-primary mb-2">Login</button>
						@if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                        @endif
					</form>
				</div>
				<img src="assets/projectPhotos/ice-tea.png" alt="" class="login-bg">
			</div>
		</div>
	</div>

	<!-- Registration Modal -->
	<div class="modal reg-modal fade" id="registrationWindow" tabindex="-1" role="dialog" aria-labelledby="registrationWindowTitle"
		aria-hidden="true">
		<div class="modal-dialog modal-dialog-centered" role="document">
			<div class="modal-content position-relative">
				<div class="modal-header">
					<h5 class="modal-title" id="exampleModalLongTitle">Registration Form</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
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
			</div>
		</div>
	</div>

	<footer class="position-relative">
		<div class="footer-top-image">
			<img src="assets/projectPhotos/ink_white_footer.png" alt="">
		</div>
		<div class="row m-0">
			<div class="col-md-4 col-lg-4 position-relative">
				<img src="assets/projectPhotos/limonPattern_left.png" alt="" class="left">
			</div>
			<div class="col-md-4 col-lg-4 container">
				<h1 class="fantasy text-center"><a href="#"> <img src="assets/projectPhotos/logo.png" alt="logo"></a></h1>
				<div class="contact">
					<ul class="list-unstyled">
						<li class="contact-item">
							<i class="fas fa-map-marker-alt fa-2x float-left"></i>
							<span class="pl-1">Ziyolilar st, Mirzo Ulugbek <br> dis. Tashkent Uzbekistan</span>
						</li>
						<li class="contact-item">
							<i class="fas fa-phone fa-2x float-left"></i>
							<span class="pl-1">+99871 268-41-23</span>
						</li>
						<li class="contact-item">
							<i class="far fa-envelope fa-2x float-left"></i>
							<span class="pl-1">fantasy@gmail.com</span>
						</li>
					</ul>
				</div>
			</div>
			<div class="col-md-4 col-lg-4 position-relative">
				<img src="assets/projectPhotos/limonPattern_right.png" alt="" class="right">
			</div>
		</div>
	</footer>
@endsection
