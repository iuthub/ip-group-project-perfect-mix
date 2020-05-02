@if(count($errors->all())>0)
    @foreach($errors->all() as $error)
        <div id="messages" class="alert alert-danger alert-dismissible fade show" role="alert">
            <strong>
                Error:
            </strong> {{ $error }}
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
    @endforeach
@endif
