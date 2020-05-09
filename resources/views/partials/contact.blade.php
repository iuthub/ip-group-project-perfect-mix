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
                    <h5 class="text-center text-primary"><strong>Contact Us</strong></h5>
                    <div class="form-group">
                        <?php $name=''?>
                        @if(Auth::check())
                            <?php $name=Auth::user()->full_name;?>
                        @endif
                        <input type="text" class="form-control" placeholder="Full Name"
                        value="{{$name}}" name="name" readonly>
                    </div>
                    <div class="form-group">
                        <?php $email=''?>
                        @if(Auth::check())
                            <?php $email=Auth::user()->email;?>
                        @endif
                        <input type="email" class="form-control" placeholder="Email" value="{{$email}}" name="email" readonly>
                    </div>

                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="Subject" value="" name="subject" required>
                    </div>

                    <div class="form-group">
                        <textarea class="form-control" name="message" cols="30" rows="3" placeholder="Enter your message here..." required></textarea>
                    </div>
                    @if(Auth::check())
                        <button type="submit" class="btn btn-primary mb-2">Submit</button>
                    @else
                        <button disabled type="submit" class="btn btn-primary mb-2">You are not Authorized</button>
                    @endif
                </form>
            </div>
        </div>
    </div>
</div>
