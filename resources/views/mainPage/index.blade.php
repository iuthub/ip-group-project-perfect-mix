@extends('layouts.header')

@include('partials.alerts')
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

	@include('partials.login')
	
	@include('partials.registration')

	@include('partials.footer')

@endsection
