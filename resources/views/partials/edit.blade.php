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
                <form method="POST">
                    <h5 class="text-center text-primary"><strong>Edit your info</strong></h5>
                    <div class="form-group" id="editFormName">
                        <input type="text" class="form-control" placeholder="Full Name">
                    </div>
                    <div class="form-group" id="editFormEmail">
                        <input type="email" class="form-control" placeholder="Email" value="sample@gmail.com" disabled>
                    </div>
                    <div class="form-group" id="editFormPhone">
                        <input type="text" class="form-control" placeholder="Phone Number">
                    </div>
                    <div class="form-group" id="editFormPassword">
                        <input type="password" class="form-control" placeholder="Password">
                    </div>
                    <div class="form-group" id="editFormPassConf">
                        <input type="password" class="form-control" placeholder="Confirm Password">
                    </div>
                    <button type="submit" class="btn btn-primary mb-2">Save</button>
                </form>
            </div>
        </div>
    </div>
</div>
