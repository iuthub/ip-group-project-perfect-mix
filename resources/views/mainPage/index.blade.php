@extends('layouts.header')

@include('partials.navbar')

@section('content')
<section class="hero position-relative">
		<h3 class="hero-title">Do you want to eat <strong>the delicious food</strong> in the world?</h3>
		<div class="hero-footer-image">
			<img src="assets/projectPhotos/ink white.png" alt="">
		</div>
	</section>
	<div class="container">
		<section class="our-work row wow fadeInUp" data-wow-duration="1s" data-wow-delay="500ms">
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
			<h3 class="title text-center wow slideInRight">Why people <strong>choose us</strong>?</h3>
			<div class="row">
				<div class="col-md-4 col-lg-4 col-sm-12 feature wow rotateIn" data-wow-delay="0.5s" data-wow-duration="1s">
					<img src="assets/projectPhotos/Group1.png" alt="">
					<h4 class="feature-content text-center">
						<strong>Delicious</strong> foods from <br>the popular <strong>chef</strong> cookers
					</h4>
				</div>
				<div class="col-md-4 col-lg-4 col-sm-12 feature wow rotateIn" data-wow-delay="0.5s" data-wow-duration="1s">
					<img src="assets/projectPhotos/Group2.png" alt="">
					<h4 class="feature-content text-center">
						<strong>Delicious</strong> foods from <br>the popular <strong>chef</strong> cookers
					</h4>
				</div>
				<div class="col-md-4 col-lg-4 col-sm-12 feature wow rotateIn" data-wow-delay="0.5s" data-wow-duration="1s">
					<img src="assets/projectPhotos/Group3.png" alt="">
					<h4 class="feature-content text-center">
						<strong>Fast</strong> delivery service
					</h4>
				</div>
			</div>
		</section>

		<section class="daily-food-str">
			<h3 class="title text-center wow fadeInUp"><img src="assets/projectPhotos/daily_food.png" alt=""></h3>
			<div class="row">
				<div class="col-md-4 col-lg-4 position-relative wow slideInLeft" data-wow-delay="0.5s">
					<img src="assets/icons/ar_lb.png" alt="" class="ar-lb">
				</div>
				<div class="col-md-4 col-lg-4 col-sm-12 feature wow fadeInUp" data-wow-delay="0.3s">
					<img class="type" src="assets/projectPhotos/breakfast.png" alt="">
					<h4 class="name text-center">Breakfast</h4>
				</div>
				<div class="col-md-4 col-lg-4 position-relative wow slideInRight" data-wow-delay="0.5s">
					<img src="assets/icons/ar_rb.png" alt="" class="ar-rb">
				</div>
				<div class="col-md-4 col-lg-4 col-sm-12 feature wow fadeInLeft" data-wow-delay="0.6s">
					<img class="type" src="assets/projectPhotos/dinner.png" alt="">
					<h4 class="name text-center">Dinner</h4>
				</div>
				<div class="col-md-4 col-lg-4"></div>
				<div class="col-md-4 col-lg-4 col-sm-12 feature wow fadeInRight" data-wow-delay="0.6s">
					<img class="type" src="assets/projectPhotos/lunch.png" alt="">
					<h4 class="name text-center">Lunch</h4>
				</div>
			</div>
		</section>
	</div>

	<!-- Login Modal -->

	@include('partials.login')

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
	@include('partials.registration')

	@include('partials.footer')

@endsection
