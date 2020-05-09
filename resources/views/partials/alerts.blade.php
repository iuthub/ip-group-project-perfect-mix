@if(count($errors->all())>0)
    @foreach($errors->all() as $error)
        <div style="font-size:0.5em;padding: 0;" class="alertbox alert alert-danger alert-dismissible fade show" role="alert">
            <strong>
            Error:
            </strong> {{ $error }}
        </div>
    @endforeach
@endif

@if(Session::has('info'))
    <div style="font-size:0.5em;padding: 0;" class="alertbox alert alert-success alert-dismissible fade show" role="alert">
        {{ Session::get('info') }}
    </div>
@endif