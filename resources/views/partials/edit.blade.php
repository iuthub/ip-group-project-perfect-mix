<!-- Edit profile Modal -->
<div class="modal edit-modal fade" id="editProfileWindow" tabindex="-1" role="dialog"
    aria-labelledby="editProfileWindowTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content position-relative">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">Edit Profile Form</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form method="POST" action="{{ route('postAdminUserEdit') }}">
                    @csrf
                    <h5 class="text-center text-primary"><strong>Edit your info</strong></h5>
                    <div class="form-group" id="editFormName">
                        <input type="text" class="form-control" name="name" value="{{$user->full_name}}">
                    </div>
                    <div class="form-group" id="loginFormEmail">
                        <input type="address" class="form-control" placeholder="Address" name="address" value="{{$user->address}}">
                    </div>
                    <div class="form-group" id="editFormEmail">
                        <input type="email" class="form-control" placeholder="Email" name="email" value="{{$user->email}}" disabled>
                    </div>
                    <div class="form-group" id="editFormPhone">
                        <input type="text" class="form-control" placeholder="Phone Number" name="phone_number" value="{{$user->phone_number}}">
                    </div>
                    <div class="form-group" id="editFormPassword">
                        <input type="password" class="form-control" placeholder="Password" name="password">
                    </div>
                    <div class="form-group" id="editFormPassConf">
                        <input type="password" class="form-control" placeholder="Confirm Password" name="password_confirmation">
                    </div>

                    @if(Auth::user()->role->name=="adminss")
                    <div class="form-group" id="loginFormEmail">
                        <select class="form-control" id="role_id" name="role_id" required focus>
                                <option value="{{$user->role->id}}" disabled selected>{{$user->role->name}}</option>

                                @foreach($roles as $role)
                                    <option value="{{$role->id}}">{{ $role->name }}</option>
                                @endforeach
                        </select>
                    </div>

                    <div class="form-group" id="loginFormEmail">
                        <select class="form-control" id="vaucher_id" name="vaucher_id" required focus>
                                <option value="{{$user->vaucher->id}}" disabled selected>{{$user->vaucher->type}} - {{$user->vaucher->value }}%</option>
                                @foreach($vauchers as $vaucher)
                                    <option value="{{$vaucher->id}}">{{ $vaucher->type }} - {{$vaucher->value }}%</option>
                                @endforeach
                        </select>
                    </div>
                    @endif
                    <input type="hidden" name="id" value="{{ $user->id }}">
                    <button type="submit" class="btn btn-primary mb-2">Save</button>
                </form>
            </div>
        </div>
    </div>
</div>
