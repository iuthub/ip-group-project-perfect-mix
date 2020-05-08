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
                    <a class="nav-link" data-toggle="modal" data-target="#orderTableWindow">Table Ordering</a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" data-toggle="modal" data-target="#contactUsWindow">Contact Us</a>
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

            <li class="nav-item active">
                <div class="dropdown">
                    <button type="button" class="btn btn-info dropdown-toggle" data-toggle="dropdown"
                    id="cardButton">
                    <i class="fa fa-shopping-cart" aria-hidden="true"></i>
                    Cart
                    <span class="badge badge-pill badge-danger" id="cartNumberOfItems">{{ (session('cart'))?count((array) session('cart')):'0' }}</span>
                    </button>
                    <div class="dropdown-menu" aria-labelledby="cardButton" id="cart">
                        <div class="dropdown-item cart-view-header sticky-top">
                            <div class="row">
                                <div class="col-6 text-left">
                                    <span>Total Price:</span>
                                </div>
                                <?php $total = 0 ?>
                                @if(session('cart'))
                                @foreach( (array) session('cart') as $id => $details)
                                <?php $total += $details['price'] * $details['quantity'] ?>
                                @endforeach
                                @endif
                                <div class="col-6 text-right">
                                    <span class="badge badge-danger">$ <span id="totalPrice">{{ $total }}</span></span>
                                </div>
                            </div>
                        </div>
                        <div class="dropdown-content dropdown-item">
                            <div class="items">
                                @if(session('cart'))
                                @foreach(session('cart') as $id => $details)
                                <div class="cart-item">
                                    <div class="row">
                                        <div class="col-3 p-1">
                                            <img style="width:100%" src="{{ URL::to($details['photo']) }}" alt="">
                                        </div>
                                        <div class="col-9">
                                            <ul class="list-unstyled position-relative">
                                                <li class="name">
                                                    {{ $details['name'] }}
                                                </li>
                                                <li class="quantity">
                                                    Quantity: <span class="badge badge-primary">{{ $details['quantity'] }}</span>
                                                </li>
                                                <li class="badge badge-success price">
                                                    ${{ $details['price'] }}
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                @endforeach
                                @endif
                            </div>
                            <a href="{{ route('getCard') }}" class="btn btn-success order-btn">Order</a>
                        </div>
                    </div>
                </div>
            </li>
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
