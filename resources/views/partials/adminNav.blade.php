<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="{{route('dashboardIndex')}}">Admin Panel</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="{{route('menuIndex')}}">Menu</a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="{{route('getUsers')}}">Users</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{route('getFoods')}}">Foods</a>
      </li>
    </ul>
    <a class="nav-link" id="log-out"href="{{ url('/logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();"> Logout </a>
    <form id="logout-form" action="{{ url('/logout') }}" method="POST">
        @csrf
    </form>
  </div>
</nav>