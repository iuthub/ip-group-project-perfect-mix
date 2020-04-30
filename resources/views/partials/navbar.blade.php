<nav class="navbar navbar-expand-lg custom-nav row">
    <div class="container">
        <a class="navbar-brand col-md-2 col-lg-2" href="#"><img src="assets/projectPhotos/logo.png" alt="logo"></a>
        <div class="collapse navbar-collapse col-md-10 col-lg-10" id="navbarText">
            <ul class="navbar-nav p-0 col-md-9 col-lg-9 flex-center">
                <li class="nav-item active">
                    <a class="nav-link" href="#">Menu <span class="sr-only">(current)</span></a>
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
