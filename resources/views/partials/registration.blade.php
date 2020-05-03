<div class="modal reg-modal fade" id="registrationWindow" tabindex="-1" role="dialog" aria-labelledby="registrationWindowTitle"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content position-relative">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLongTitle">Registration Form</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf
                        <h5 class="text-center text-primary"><strong>Register</strong></h5>
                        <div class="form-group" id="loginFormEmail">
                            <input type="text" class="form-control" placeholder="Full Name" name="name">
                        </div>
                        <div class="form-group" id="loginFormEmail">
                            <input type="address" class="form-control" placeholder="Address" name="address">
                        </div>
                        <div class="form-group" id="loginFormEmail">
                            <input type="email" class="form-control" placeholder="Email" name="email">
                        </div>
                        <div class="form-group" id="loginFormPassword">
                            <input type="text" class="form-control" placeholder="Phone Number" name="phone_number">
                        </div>
                        <div class="form-group" id="loginFormEmail">
                            <input type="password" class="form-control" placeholder="Password" name="password">
                        </div>
                        <div class="form-group" id="loginFormEmail">
                            <input type="password" class="form-control" placeholder="Confirm Password" name="password_confirmation">
                        </div>
                        <button type="submit" class="btn btn-primary mb-2">Register</button>
                    </form>
                </div>
            </div>
        </div>
    </div>