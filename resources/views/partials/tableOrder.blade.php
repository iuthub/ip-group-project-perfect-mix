
<div class="modal reg-modal fade" id="orderTableWindow" tabindex="-1" role="dialog"
    aria-labelledby="orderTableWindowTitle" aria-hidden="true">
<div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content position-relative">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">Table Reservation Form</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="{{route('reserveTable')}}" method="POST" id="tableOrderForm">
                    @csrf
                    <h5 class="text-center text-primary"><strong>Get your table easily!</strong></h5>
                    <div class="form-group" id="tables">
                        <select class="form-control" name="table" aria-describedby="tableHelp">
                            <option value="" disabled>Choose your table</option>
                            <option value="1">Table #1</option>
                            <option value="2">Table #2</option>
                            <option value="3">Table #3</option>
                            <option value="4">Table #4</option>
                            <option value="5">Table #5</option>
                            <option value="6">Table #6</option>
                            <option value="7">Table #7</option>
                            <option value="8">Table #8</option>
                            <option value="9">Table #9</option>
                            <option value="10">Table #10</option>
                            <option value="11">Table #11</option>
                        </select>                        
                    </div>
                    <div class="form-group">
                        <label for="numberOfPeople">How many are you?</label>
                        <input type="number" class="form-control" name="numPeople" value="1" min="1" max="15">
                    </div>
                    <div class="form-group">
                        <div class="row">
                            <div class="col-6">
                                <label for="reserveStartTime">from</label>
                                <input type="time" class="form-control" name="reserveStartTime">
                            </div>
                            <div class="col-6">
                                <label for="reserveEndTime">to</label>
                                <input type="time" class="form-control" name="reserveEndTime">
                            </div>
                        </div>
                    </div>
                    @if(Auth::check())
                        <button type="submit" class="btn btn-primary mb-2">Reserve</button>
                    @else
                        <button disabled type="submit" class="btn btn-primary mb-2">You are not Authorized</button>
                    @endif
                </form>
            </div>
        </div>
    </div>
</div>
