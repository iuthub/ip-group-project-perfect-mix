@extends('layouts.header')

@include('partials.navbar')

@section('content')

<section class="menu-header position-relative">
        <h3 class="title">Our Menu</h3>
        <div class="hero-footer-image">
            <img src="{{URL::to('assets/projectPhotos/ink white.png')}}" alt="">
        </div>
    </section>

    <div class="container">
        <section class="section-cuisine fadeInUp mt-5" data-wow-duration="1s" data-wow-delay="300ms">
            <div class="row">

                @foreach($cuisines as $cuisine)
                    <div class="col-md-3 col-sm-6 mb-3">
                        <div class="cuisine"
                        style="background: url({{URL::to($cuisine->photo_path)}}) no-repeat center;background-size: cover;">
                            <div class="overlay text-center">
                                <span>{{$cuisine->name}}</span>
                            </div>
                        </div>
                    </div>
                @endforeach

            </div>
        </section>

        <section class="food-types">
            <div class="row">
                @foreach($food_types as $food_type)
                    <div class="col-md-3 col-lg-3 col-sm-6 mt-3">
                        <div class="item text-center" style="background: url({{URL::to($food_type->photo_path)}}) no-repeat center;background-size: cover;">
                            <span>{{$food_type->name}}</span>
                        </div>
                    </div>
                @endforeach

            </div>
        </section>

        <section class="foods">
            <h2 class="title text-center">Traditional foods</h2>
            <div class="row">

            @foreach($foods as $food)
                <div class="col-md-4 col-lg-4 col-sm-6 col-xs-12">
                    <div class="item">
                        <div class="card">

                            <img class="card-img-top" src="{{URL::to($food->photo_path)}}" alt="Card image cap">
                            <div class="card-body">
                                <form method="POST" id="formfood" action="{{ route('addToCard') }}">
                                    @csrf
                                    <h4 class="card-title text-left food-name">{{$food->name}}</h4>
                                    <p class="content">{{$food->description}}</p>
                                    <div class="row">
                                        <p class="col-md-6 price">${{$food->price}}</p>
                                        <p class="col-md-6 text-right">
                                            <input type="number" name="quantity" value='1' min='1' class="quantity">
                                        </p>
                                    </div>
                                    {{-- <button class="submit" class="btn order-btn" align="center">Order</button> --}}
                                    <input type="hidden" name="id" value="{{ $food->id }}">
                                    <button type="submit" class="btn order-btn add-cart">Order</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </section>
    </div>


    <!-- Login Modal -->
	@include('partials.login')
    <!-- Registration Modal -->
	@include('partials.registration')

	@include('partials.footer')
@endsection

@section('script')
    <script src="{{URL::to('js/cart.js') }}"></script>
@endsection
