
      <div class=linee >
          <!--<a class="navbar-brand" href="{{ url('/') }}">
              {{ config('app.name', 'Laravel') }}
          </a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
              <span class="navbar-toggler-icon"></span>
-->
        <a href="#"> <img src="assets/projectPhotos/logo.png" alt="logo"></a>

          <div class="navbarContent">
            <li class="menuItem" ><a id="linknav"  href="#">Menu</a></li>
            <li class="menuItem"><a id="linknav" href="#">Drinks</a></li>
            <li class="menuItem"><a id="linknav" href="#">Table Ordering</a></li>
            <li class="menuItem"><a id="linknav" href="#">Contacts</a></li>

          </div>
                  <!-- Authentication Links -->
                  @guest
                      <!--<li class="menuItem" >
                          <a  id="linknav" class="button" href="{{ route('login') }}">{{ __('Login') }}</a>
                      </li>-->
                      @if (Route::has('register'))
                          <li class="menuItem">
                              <a id="linknav" class="button" href="{{ route('register') }}">{{ __('Sign Up') }}</a>
                          </li>
                      @endif
                  @else
                      <li class="menuItem">
                          <a id="linknav" class="link" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                              {{ Auth::user()->name }} <span class="caret"></span>
                          </a>

                          <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                              <a id="linknav" class="button" href="{{ route('logout') }}"
                                 onclick="event.preventDefault();
                                               document.getElementById('logout-form').submit();">
                                  {{ __('Logout') }}
                              </a>

                              <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                  @csrf
                              </form>
                          </div>
                      </li>
                  @endguest



      </div>
