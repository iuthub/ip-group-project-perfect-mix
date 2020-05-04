<div class="modal login-modal fade" id="loginWindow" tabindex="-1" role="dialog" aria-labelledby="loginWindowTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content position-relative">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLongTitle">Login Form</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf
                        <h5><strong>Log</strong> into <span class="text-primary">Account</span></h5>
                        <div class="form-group" id="loginFormEmail">
                            <input type="email" class="form-control" placeholder="Email" name="email" value="{{old('email')}}">
                        </div>
                        <div class="form-group" id="loginFormPassword">
                            <input type="password" class="form-control" placeholder="Password" name="password" value="{{old('password')}}">
                        </div>
                        <button type="submit" class="btn btn-primary mb-2">Login</button>
                        @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                        @endif
                    </form>
                </div>
                <img src="assets/projectPhotos/ice-tea.png" alt="" class="login-bg">
            </div>
        </div>
    </div>
