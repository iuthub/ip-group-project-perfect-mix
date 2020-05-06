@extends ('layouts.header')

@include('partials.navbar')

@section('content')

    <section class="order-header position-relative">
        <div class="title">
            <h3>Place Your Order</h3>
            <p>Get your food easily from our take away service!</p>
        </div>
        <div class="hero-footer-image">
            <img src="assets/projectPhotos/ink white.png" alt="">
        </div>
    </section>

    <div class="order-content row">
        <div class="col-md-8 col-lg-8 col-sm-12 order-list">
            <div class="container row">
                <div class="col-12 item">
                    <div class="row">
                        <div class="col-md-2 position-relative">
                            <img src="assets/img/Food/manti.jpg" alt="">
                        </div>
                        <div class="col-md-8 item-content">
                            <div class="row">
                                <h5 class="col-md-8 col-lg-8 name">Mazali Bemaza Manti</h5>
                                <div class="col-md-4 col-lg-4 text-right">
                                    <span class="badge badge-danger price p-2">$15.99</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-2">
                            <div class="row h-100">
                                <form class="col-md-6 col-lg-6 quantity-form">
                                    <div class="form-group">
                                        <input type="number" class="form-control h-100" name="" id="" value="4">
                                    </div>
                                </form>
                                <!-- <button class="btn btn-info flex-grow-1" id="updateItem"><i class="fas fa-pencil-alt"></i></button> -->
                                <button class="btn btn-danger flex-grow-1 col-md-6 col-lg-6" id="removeItem"><i class="far fa-trash-alt"></i></button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 item">
                    <div class="row">
                        <div class="col-md-2 position-relative">
                            <img src="assets/img/Food/manti.jpg" alt="">
                        </div>
                        <div class="col-md-8 item-content">
                            <div class="row">
                                <h5 class="col-md-8 col-lg-8 name">Mazali Bemaza Manti</h5>
                                <div class="col-md-4 col-lg-4 text-right">
                                    <span class="badge badge-danger price p-2">$15.99</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-2">
                            <div class="row h-100">
                                <form class="col-md-6 col-lg-6 quantity-form">
                                    <div class="form-group">
                                        <input type="number" class="form-control h-100" name="" id="" value="4">
                                    </div>
                                </form>
                                <!-- <button class="btn btn-info flex-grow-1" id="updateItem"><i class="fas fa-pencil-alt"></i></button> -->
                                <button class="btn btn-danger flex-grow-1 col-md-6 col-lg-6" id="removeItem"><i class="far fa-trash-alt"></i></button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 item">
                    <div class="row">
                        <div class="col-md-2 position-relative">
                            <img src="assets/img/Food/manti.jpg" alt="">
                        </div>
                        <div class="col-md-8 item-content">
                            <div class="row">
                                <h5 class="col-md-8 col-lg-8 name">Mazali Bemaza Manti</h5>
                                <div class="col-md-4 col-lg-4 text-right">
                                    <span class="badge badge-danger price p-2">$15.99</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-2">
                            <div class="row h-100">
                                <form class="col-md-6 col-lg-6 quantity-form">
                                    <div class="form-group">
                                        <input type="number" class="form-control h-100" name="" id="" value="4">
                                    </div>
                                </form>
                                <!-- <button class="btn btn-info flex-grow-1" id="updateItem"><i class="fas fa-pencil-alt"></i></button> -->
                                <button class="btn btn-danger flex-grow-1 col-md-6 col-lg-6" id="removeItem"><i class="far fa-trash-alt"></i></button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-4 col-lg-4 col-sm-12 order-details">
            <div class="card">
                <img src="assets/icons/shopping_cart_full.png" alt="" class="card-img-top">
                <div class="card-body">
                    <div class="order-price row">
                        <p class="col-md-6">
                            <i class="fas fa-dollar-sign"></i>Order price:
                        </p>
                        <p class="col-md-6 text-right">
                            <i class="fas fa-dollar-sign"></i>90.00
                        </p>
                    </div>
                    <div class="delivery-price row">
                        <p class="col-md-6">
                            <i class="fas fa-truck"></i>Delivery fee:
                        </p>
                        <p class="col-md-6 text-right">
                            <i class="fas fa-dollar-sign"></i>9.99
                        </p>
                    </div>
                    <div class="phone row">
                        <p class="col-md-6">
                            <i class="fas fa-phone-alt"></i>Contact-number:
                        </p>
                        <p class="col-md-6 text-right">
                            +998970001122
                        </p>
                    </div>
                    <div class="address row">
                        <p class="col-md-6">
                            <i class="fas fa-map-marker-alt"></i>Address:
                        </p>
                        <p class="col-md-6 text-right">
                            Yunusobod-17, 9-uy, 31
                        </p>
                    </div>
                    <div class="client-status row">
                        <p class="col-md-6">
                            <i class="fas fa-star-half-alt"></i>Client status:
                        </p>
                        <p class="col-md-6 text-right">
                            Silver (3% off)
                        </p>
                    </div>
                    <div class="total-price row">
                        <p class="col-md-6">
                            <i class="fas fa-dollar-sign"></i>Total price:
                        </p>
                        <p class="col-md-6 text-right">
                            <i class="fas fa-dollar-sign"></i>97.29
                        </p>
                    </div>
                    <button class="order-btn">
                        Order
                    </button>
                </div>
            </div>
        </div>
    </div>

    <!-- Login Modal -->
	@include('partials.login')
    <!-- Registration Modal -->
    @include('partials.registration')
    <!-- Edit Profile Modal -->
	@include('partials.edit')
    <!-- Footer -->
    @include('partials.footer')
@endsection
