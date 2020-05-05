@extends ('layouts.header')

@include('partials.navbar')

@section('content')

    <section class="dashboard-header position-relative">
        <div class="title">
            <h3>Welcome, Jasur Makhsudov!</h3>
            <p>Tired of making bugs?? Check your dashboard!</p>
        </div>
        <div class="hero-footer-image">
            <img src="assets/projectPhotos/ink white.png" alt="">
        </div>
    </section>
    <div class="container">
        <div class="user-info row">
            <div class="avatar col-md-3 col-lg-3 text-center pt-4">
                <i class="far fa-user-circle fa-10x"></i>
            </div>
            <div class="info-content col-md-6 col-lg-6">
                <div class="row">
                    <h4 class="name col-md-12">Jasur Makhsudov</h4>
                    <div class="col-md-6 col-sm-12">
                        <i class="fas fa-phone"></i> <strong>Phone Number:</strong><br> +998994583625
                    </div>
                    <div class="col-md-6 col-sm-12">
                        <i class="fas fa-mail-bulk"></i> <strong>Email:</strong><br> hot@gmail.com
                    </div>
                    <div class="col-sm-12">
                        <i class="fa fa-map-marker"></i> <strong>Address:</strong> Chilonzor-19, 8, 12
                    </div>
                </div>
            </div>
            <div class="status-container col-md-3 col-sm-3">
                <div class="row">
                    <a class="btn btn-edit-profile col-12" data-toggle="modal" data-target="#editProfileWindow">
                        Edit profile
                    </a>
                    <div class="col-12 status mt-2">
                        <div class="vaucher" style="background-image: url(/assets/img/status-gold.jpg); background-size:cover;">
                            <h3 class="type text-center text-uppercase">Gold</h3>
                            <p class="value text-danger text-center">7% off for any order</p>
                        </div>
                        <h4 class="text-center text-uppercase text-info">Status</h4>
                    </div>
                </div>
            </div>
        </div>
        <section class="statistics">
            <div class="row">
                <div class="col-md-3 col-sm-12"></div>
                <div class="col-md-3 col-sm-12">
                    <div class="item" id="total-orders">
                        <h2 class="value text-left timer" data-from="0" data-to="112" data-speed="1000">0</h2>
                        <p class="title">Total orders</p>
                        <i class="fas fa-shopping-cart fa-3x custom-i"></i>
                    </div>
                </div>
                <div class="col-md-3 col-sm-12">
                    <div class="item" id="total-expenses">
                        <h2 class="value text-left">$<span class="timer" data-from="0" data-to="1520"
                                data-speed="2000">0</span></h2>
                        <p class="title">Total expenses</p>
                        <i class="fas fa-wallet fa-3x custom-i"></i>
                    </div>
                </div>
                <div class="col-md-3 col-sm-12"></div>
            </div>
        </section>
        <section class="history">
            <h2 class="text-center text-info mb-4">Here are the list of orders you recently made</h2>
            <div class="listings">
                <div class="item">
                    <div class="row">
                        <div class="col-md-2">
                            <img src="assets/img/Food/manti.jpg" alt="">
                        </div>
                        <div class="col-md-7 item-content position-relative">
                            <h5 class="name">Mazali Bemaza Manti</h5>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Beatae cumque vero eaque
                                voluptatum porro qui, asperiores voluptatibus nemo, sapiente corporis et in deleniti </p>
                            <span class="badge badge-danger p-2 price">$7.45</span>
                        </div>
                        <div class="col-md-3 p-2 text-center right">
                            <div class="date p-3">
                                <i class="far fa-calendar-alt"></i> Date: <br>
                                2020-01-15
                            </div>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="row">
                        <div class="col-md-2">
                            <img src="assets/img/Food/manti.jpg" alt="">
                        </div>
                        <div class="col-md-7 item-content position-relative">
                            <h5 class="name">Mazali Bemaza Manti</h5>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Beatae cumque vero eaque
                                voluptatum porro qui, asperiores voluptatibus nemo, sapiente corporis et in deleniti
                            </p>
                            <span class="badge badge-danger p-2 price">$7.45</span>
                        </div>
                        <div class="col-md-3 p-2 text-center right">
                            <div class="date p-3">
                                <i class="far fa-calendar-alt"></i> Date: <br>
                                2020-01-15
                            </div>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="row">
                        <div class="col-md-2">
                            <img src="assets/img/Food/manti.jpg" alt="">
                        </div>
                        <div class="col-md-7 item-content position-relative">
                            <h5 class="name">Mazali Bemaza Manti</h5>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Beatae cumque vero eaque
                                voluptatum porro qui, asperiores voluptatibus nemo, sapiente corporis et in deleniti
                            </p>
                            <span class="badge badge-danger p-2 price">$7.45</span>
                        </div>
                        <div class="col-md-3 p-2 text-center right">
                            <div class="date p-3">
                                <i class="far fa-calendar-alt"></i> Date: <br>
                                2020-01-15
                            </div>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="row">
                        <div class="col-md-2">
                            <img src="assets/img/Food/manti.jpg" alt="">
                        </div>
                        <div class="col-md-7 item-content position-relative">
                            <h5 class="name">Mazali Bemaza Manti</h5>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Beatae cumque vero eaque
                                voluptatum porro qui, asperiores voluptatibus nemo, sapiente corporis et in deleniti
                            </p>
                            <span class="badge badge-danger p-2 price">$7.45</span>
                        </div>
                        <div class="col-md-3 p-2 text-center right">
                            <div class="date p-3">
                                <i class="far fa-calendar-alt"></i> Date: <br>
                                2020-01-15
                            </div>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="row">
                        <div class="col-md-2">
                            <img src="assets/img/Food/manti.jpg" alt="">
                        </div>
                        <div class="col-md-7 item-content position-relative">
                            <h5 class="name">Mazali Bemaza Manti</h5>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Beatae cumque vero eaque
                                voluptatum porro qui, asperiores voluptatibus nemo, sapiente corporis et in deleniti
                            </p>
                            <span class="badge badge-danger p-2 price">$7.45</span>
                        </div>
                        <div class="col-md-3 p-2 text-center right">
                            <div class="date p-3">
                                <i class="far fa-calendar-alt"></i> Date: <br>
                                2020-01-15
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
    <!-- Edit Profile Modal -->
	@include('partials.edit')
    <!-- Footer -->
	@include('partials.footer')
@endsection
