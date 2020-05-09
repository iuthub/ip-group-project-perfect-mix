<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    @yield('title')
	<link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Quicksand" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Montserrat:500&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.6.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="{{ URL::to('css/styles.css') }}">
    <link rel="stylesheet" href="{{ URL::to('css/all.css') }}">
	<link rel="stylesheet" href="{{ URL::to('css/bootstrap.css') }}">
    <link rel="stylesheet" href="{{ URL::to('css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ URL::to('css/animate.css') }}">
    <link rel="shortcut icon" href="{{ URL::to('assets/icons/shortcut_icon.png') }}">
    @yield('style')
</head>

<body>
    @yield('content')
    
    <script src="{{URL::to('js/jquery.js') }}"></script>
    <script src="{{URL::to('js/custom.js') }}"></script>
    <script src="{{URL::to('js/all.min.js') }}"></script>
    <script src="{{URL::to('js/bootstrap.min.js') }}"></script>
    <script src="{{URL::to('js/bootstrap.js') }}"></script>
    <script src="{{URL::to('js/lightbox.js') }}"></script>
    <script src="{{URL::to('js/wow.min.js') }}"></script>
    <script src="{{URL::to('js/waypoints.min.js') }}"></script>
    <script src="{{URL::to('js/jquery.countTo.js') }}"></script>
    @yield('script')

    <script type="text/javascript">
    $(".remove-from-cart").click(function (e) {
            e.preventDefault();
 
            var ele = $(this);
 
            if(confirm("Are you sure")) {
                $.ajax({
                    url: '{{ route('addToCardDelete') }}',
                    method: "post",
                    data: {_token: '{{ csrf_token() }}', id: ele.attr("data-id")},
                    success: function (response) {
                        window.location.reload();
                    }
                });
            }
        });
    </script>


    
</body>

</html>
