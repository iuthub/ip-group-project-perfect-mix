<nav class="navbar navbar-expand-lg custom-nav row wow fadeInDown">
    <div class="container">
        <a class="navbar-brand col-md-2 col-lg-2" href="{{route('mainIndex')}}">
            <img src="{{URL::to('assets/projectPhotos/logo.png')}}" alt="logo"></a>
        <div class="collapse navbar-collapse col-md-10 col-lg-10" id="navbarText">
            <ul class="navbar-nav p-0 col-md-9 col-lg-9 flex-center">
                <li class="nav-item active">
                    <a class="nav-link" href="{{route('menuIndex')}}">Menu <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="#">Drinks</a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="#">Table Ordering</a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="#">Contacts</a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="{{route('dashboardIndex')}}">Dashboard</a>
                </li>
            </ul>
            <ul class="navbar-nav col-md-3 col-lg-3 p-0 flex-end">
            @if(!Auth::check())
                <li class="nav-item active">
                    <a class="nav-link" id="login" data-toggle="modal" data-target="#loginWindow">Log in</a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="#" id="sign-up" data-toggle="modal" data-target="#registrationWindow">Sign Up</a>
                </li>
            @else

                <li id="cartcheckout" class="nav-item active">
                    <div class="row">
        <div class="col-lg-12 col-sm-12 col-12 main-section">
            <div class="dropdown">
                <button type="button" class="btn btn-info" data-toggle="dropdown">
                    <i class="fa fa-shopping-cart" aria-hidden="true"></i> 
                    Cart 
                    <span class="badge badge-pill badge-danger">
                        {{ (session('cart'))?count((array) session('cart')):'0' }}
                    </span>
                </button>

                <div class="dropdown-menu">
                    <div class="row total-header-section">
                        
                        <div class="col-lg-6 col-sm-6 col-6">
                            <i class="fa fa-shopping-cart" aria-hidden="true"></i>
                            <span class="badge badge-pill badge-danger">
                                {{ (session('cart'))?count((array) session('cart')):'0' }}
                            </span>
                        </div>
 
                        <?php $total = 0 ?>
                        @if(session('cart'))
                        @foreach( (array) session('cart') as $id => $details)
                            <?php $total += $details['price'] * $details['quantity'] ?>
                        @endforeach
                        @endif
                        <div class="col-lg-6 col-sm-6 col-6 total-section text-right">
                            <p>Total: <span class="text-info">$ {{ $total }}</span></p>
                        </div>
                    
                    </div>
 
                    @if(session('cart'))
                        @foreach(session('cart') as $id => $details)
                            <div class="row cart-detail">
                                <div class="col-lg-4 col-sm-4 col-4 cart-detail-img">
                                    <img style="width: 50px;" src="{{ URL::to($details['photo']) }}" />
                                </div>
                                <div class="col-lg-8 col-sm-8 col-8 cart-detail-product">
                                    <p>{{ $details['name'] }}</p>
                                    <span class="price text-info"> ${{ $details['price'] }}</span> <span class="count"> Quantity:{{ $details['quantity'] }}</span>
                                </div>
                            </div>
                            <hr/>
                        @endforeach
                    @endif

                    <div class="row">
                        <div class="col-lg-12 col-sm-12 col-12 text-center checkout">
                            <a href="{{ route('getCard') }}" class="btn btn-primary btn-block">View all</a>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>

                </li>
                <li class="nav-item active">
                    <a class="nav-link" id="log-out"href="{{ url('/logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();"> Logout </a>
                    <form id="logout-form" action="{{ url('/logout') }}" method="POST">
                    @csrf
                    </form>
                </li>
            @endif
            </ul>
        </div>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText"
            aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon">
                <i class="fas fa-bars" style="color:#fff; font-size:28px;"></i>
            </span>
        </button>
    </div>
</nav>
