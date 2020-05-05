@extends('layouts.header')

@include('partials.navbar')

@section('style')
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Rye&display=swap');
    </style>
@endsection

@section('content')
<section class="menu-header position-relative">
        <h3 class="title">Our Menu</h3>
        <div class="hero-footer-image">
            <img src="assets/projectPhotos/ink white.png" alt="">
        </div>
    </section>

    <div class="container">
        <section class="section-cuisine fadeInUp mt-5" data-wow-duration="1s" data-wow-delay="300ms">
            <div class="row">
                <div class="col-md-3 col-sm-6">
                    <div class="cuisine cuisine-uzb">
                        <div class="overlay text-center">
                            <span>Uzbek</span>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="cuisine cuisine-eu">
                        <div class="overlay text-center">
                            <span>European</span>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="cuisine cuisine-china">
                        <div class="overlay text-center">
                            <span>Chinese</span>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="cuisine cuisine-italy">
                        <div class="overlay text-center">
                            <span>Italian</span>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="food-types">
            <div class="row">
                <div class="col-md-3 col-lg-3 col-sm-6 mt-3">
                    <div class="item text-center traditional">
                        <span>Traditional</span>
                    </div>
                </div>
                <div class="col-md-3 col-lg-3 col-sm-6 mt-3">
                    <div class="item text-center salad">
                        <span>Salad</span>
                    </div>
                </div>
                <div class="col-md-3 col-lg-3 col-sm-6 mt-3">
                    <div class="item text-center fish">
                        <span>Fish</span>
                    </div>
                </div>
                <div class="col-md-3 col-lg-3 col-sm-6 mt-3">
                    <div class="item text-center soup">
                        <span>Soup</span>
                    </div>
                </div>
            </div>
        </section>

        <section class="foods">
            <h2 class="title text-center">Traditional foods</h2>
            <div class="row">
                <div class="col-md-4 col-lg-4 col-sm-6 col-xs-12">
                    <div class="item">
                        <div class="card">
                            <img class="card-img-top" src="assets/img/Food/manti.jpg" alt="Card image cap">
                            <div class="card-body">
                                <h4 class="card-title text-left">Manti</h4>
                                <p class="content">Go'sht, Piyoz, Un, Tuz, Suv</p>
                                <div class="row">
                                    <p class="col-md-6 price">4000 sum</p>
                                    <p class="col-md-6 text-right">
                                        <input type="number" name="quantity" value='1' min='1' class="quantity">
                                    </p>
                                </div>
                                <a href="#" class="btn order-btn">Order</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-lg-4 col-sm-6 col-xs-12">
                    <div class="item">
                        <div class="card">
                            <img class="card-img-top" src="assets/img/Food/manti.jpg" alt="Card image cap">
                            <div class="card-body">
                                <h4 class="card-title text-left">Manti</h4>
                                <p class="content">Go'sht, Piyoz, Un, Tuz, Suv</p>
                                <div class="row">
                                    <p class="col-md-6 price">4000 sum</p>
                                    <p class="col-md-6 text-right">
                                        <input type="number" name="quantity" value='1' min='1' class="quantity">
                                    </p>
                                </div>
                                <a href="#" class="btn order-btn">Order</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-lg-4 col-sm-6 col-xs-12">
                    <div class="item">
                        <div class="card">
                            <img class="card-img-top" src="assets/img/Food/manti.jpg" alt="Card image cap">
                            <div class="card-body">
                                <h4 class="card-title text-left">Manti</h4>
                                <p class="content">Go'sht, Piyoz, Un, Tuz, Suv</p>
                                <div class="row">
                                    <p class="col-md-6 price">4000 sum</p>
                                    <p class="col-md-6 text-right">
                                        <input type="number" name="quantity" value='1' min='1' class="quantity">
                                    </p>
                                </div>
                                <a href="#" class="btn order-btn">Order</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-lg-4 col-sm-6 col-xs-12">
                    <div class="item">
                        <div class="card">
                            <img class="card-img-top" src="assets/img/Food/manti.jpg" alt="Card image cap">
                            <div class="card-body">
                                <h4 class="card-title text-left">Manti</h4>
                                <p class="content">Go'sht, Piyoz, Un, Tuz, Suv</p>
                                <div class="row">
                                    <p class="col-md-6 price">4000 sum</p>
                                    <p class="col-md-6 text-right">
                                        <input type="number" name="quantity" value='1' min='1' class="quantity">
                                    </p>
                                </div>
                                <a href="#" class="btn order-btn">Order</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-lg-4 col-sm-6 col-xs-12">
                    <div class="item">
                        <div class="card">
                            <img class="card-img-top" src="assets/img/Food/manti.jpg" alt="Card image cap">
                            <div class="card-body">
                                <h4 class="card-title text-left">Manti</h4>
                                <p class="content">Go'sht, Piyoz, Un, Tuz, Suv</p>
                                <div class="row">
                                    <p class="col-md-6 price">4000 sum</p>
                                    <p class="col-md-6 text-right">
                                        <input type="number" name="quantity" value='1' min='1' class="quantity">
                                    </p>
                                </div>
                                <a href="#" class="btn order-btn">Order</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-lg-4 col-sm-6 col-xs-12">
                    <div class="item">
                        <div class="card">
                            <img class="card-img-top" src="assets/img/Food/manti.jpg" alt="Card image cap">
                            <div class="card-body">
                                <h4 class="card-title text-left">Manti</h4>
                                <p class="content">Go'sht, Piyoz, Un, Tuz, Suv</p>
                                <div class="row">
                                    <p class="col-md-6 price">4000 sum</p>
                                    <p class="col-md-6 text-right">
                                        <input type="number" name="quantity" value='1' min='1' class="quantity">
                                    </p>
                                </div>
                                <a href="#" class="btn order-btn">Order</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>

    <!-- Login Modal -->
	@include('partials.login')
    <!-- Registration Modal -->
	@include('partials.registration')

	@include('partials.footer')
@endsection
