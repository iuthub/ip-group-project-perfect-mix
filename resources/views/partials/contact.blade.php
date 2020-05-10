<div class="modal reg-modal fade" id="contactUsWindow" tabindex="-1" role="dialog"
    aria-labelledby="contactUsWindowTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content position-relative">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">Contact Us Form</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form method="POST" action="{{route('sendEmail')}}">
                    @csrf
                    @if(Auth::check())
                        <?php
                            $name=Auth::user()->full_name;
                            $email=Auth::user()->email;
                            $disabled="";
                        ?>
                        <h5 class="text-center text-primary"><strong>Contact Us</strong></h5>
                    @else
                        <?php
                            $name='';
                            $email='';
                            $disabled="disabled";
                        ?>
                        <h6 class="alert alert-danger text-center"><strong>Login First!</strong></h6>
                    @endif
                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="Full Name"
                        value="{{$name}}" name="name" readonly>
                    </div>
                    <div class="form-group">
                        <input type="email" class="form-control" placeholder="Email" value="{{$email}}" name="email" readonly>
                    </div>

                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="Subject" value="" name="subject" required <?php echo $disabled ?>>
                    </div>

                    <div class="form-group">
                        <textarea class="form-control" name="message" cols="30" rows="3" placeholder="Enter your message here..." required <?php echo $disabled ?>></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary mb-2" <?php echo $disabled ?>>Submit</button>
                </form>
            </div>
        </div>
    </div>
</div>
