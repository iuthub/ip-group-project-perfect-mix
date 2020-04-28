@extends('layouts.fantasy')

@section('content')

	<header>
		<a href="#"> <img src="assets/projectPhotos/logo.png" alt="logo"></a>
		<nav>
			<li><a href="#">Menu</a></li>
			<li><a href="#">Drinks</a></li>
			<li><a href="#">Table Ordering</a></li>
			<li><a href="#">Contacts</a></li>
		</nav>
		<a class="button" href="#" id="loginForm">Log In</a>

	</header>



	<section class="hero">
		<div class="background-image" style="background-image: url(assets/img/img1.jpg);"></div>
		<hr class="new5">
		<h3>Do you want to eat a deliciouce food in the world?</h3>


	</section>


<!--
	<section class="our-work">
<ul>
	<li>
		<h3 class="aboutUs" class="title">Some of our work</h3>
		<p class="aboutUs">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam id felis et ipsum bibendum ultrices. Morbi vitae pulvinar velit. Sed aliquam dictum sapien, id sagittis augue malesuada eu.</p>
<li>
	<li>
	<img  class="imgfood" src="assets/projectPhotos/food.png" alt="food">
</li>
<ul>
	</section>
-->

	<section class="features">
		<h3 class="title">Why people <strong>choose us</strong>?</h3>

		<ul class="grid">
			<li>
				<img class="group1" src="assets/projectPhotos/Group1.png" alt="">
				<h4><strong>Delicious</strong> foods from <br>the popular <strong>chef</strong> cookers</h4>
				</li>
			<li>
				<img class="group1" src="assets/projectPhotos/Group2.png" alt="">
				<h4> <strong>Friendly</strong> atmosphere  </h4>
			</li>
			<li>
				<img class="group1" src="assets/projectPhotos/Group3.png" alt="">
				<h4 ><strong>Fast</strong> delivery service</h4>
			</li>
		</div>
	</section>


	<section class="reviews">
		<h3 class="title">What others say:</h3>

		<p class="quote">Mauris sit amet mauris a arcu eleifend ultricies eget ut dolor. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos.</p>
		<p class="author">— Patrick Farrell</p>

		<p class="quote">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam id felis et ipsum bibendum ultrices. Morbi vitae pulvinar velit. Sed aliquam dictum sapien, id sagittis augue malesuada eu.</p>
		<p class="author">— George Smith</p>

		<p class="quote">Donec commodo dolor augue, vitae faucibus tortor tincidunt in. Aliquam vitae leo quis mi pulvinar ornare. Integer eu iaculis metus.</p>
		<p class="author">— Kevin Blake</p>


	</section>




	<footer>
		<div class="Center">
		<a href="#"> <img src="assets/projectPhotos/logo.png" alt="logo"></a>
		<ul>
			<li><a href="#"><img src="assets/icons/address.svg" alt=""></a></li>


		</ul>

		<ul>
			<li><a href="#"><img src="assets/icons/Facebook.svg" alt=""></a></li>
			<li><a href="#"><img src="assets/icons/instagram.png" alt=""></a></li>
			<li><a href="#"><img src="assets/icons/youtube.png" alt=""></a></li>
			<li><a href="#"><img src="assets/icons/IN.png" alt=""></a></li>

		</ul>
	</div>

	</footer>

@endsection
