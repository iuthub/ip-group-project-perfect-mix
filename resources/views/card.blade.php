@extends ('layouts.header')

@include('partials.navbar')


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

@section('content')

    <section class="order-header position-relative">
        <div class="title">
            <h3>Place Your Order</h3>
            <p>Get your food easily from our take away service!</p>
        </div>
        <div class="hero-footer-image">
            <img src="{{URL::to('assets/projectPhotos/ink white.png')}}" alt="">
        </div>
    </section>
<form action="{{ route('checkoutOrder') }}" method="post">
    @csrf
    <div class="order-content row">
        <div class="col-md-8 col-lg-8 col-sm-12 order-list">
            <div class="container row">
           
<?php $total = 0 ?>
       @if(session('cart'))
           @foreach(session('cart') as $id => $details)

               <?php $total += $details['price'] * $details['quantity'] ?>

                <div class="col-12 item">
                    <div class="row">
                        <div class="col-md-2 position-relative">
                            <img src="{{ URL::to($details['photo']) }}" alt="">
                        </div>
                        <div class="col-md-8 item-content">
                            <div class="row">
                                <h5 class="col-md-8 col-lg-8 name">{{ $details['name'] }}</h5>
                                <div class="col-md-4 col-lg-4 text-right">
                                    <span class="badge badge-danger price p-2">${{ $details['price'] }}</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-2">
                            <div class="row h-100">
                               
                                    <div class="form-group">
                                        <input type="number" readonly class="form-control h-100" name="" id="" value="{{ $details['quantity'] }}">
                                    </div>
                               
                                <!-- <button class="btn btn-info flex-grow-1" id="updateItem"><i class="fas fa-pencil-alt"></i></button> -->
                                <button class="btn btn-danger flex-grow-1 col-md-6 col-lg-6 remove-from-cart" id="removeItem" data-id="{{ $id }}"><i class="far fa-trash-alt"></i></button>
                               
                            </div>
                        </div>
                    </div>
                </div>
        @endforeach
    @endif

            </div>
        </div>
        <div class="col-md-4 col-lg-4 col-sm-12 order-details">
            <div class="card">
                <img src="{{URL::to('assets/icons/delivery.png')}}" alt="" class="card-img-top">
                <div class="card-body">
                    <div class="order-price row">
                        <p class="col-md-6">
                            <i class="fas fa-dollar-sign"></i>Order price:
                        </p>
                        <p class="col-md-6 text-right">
                            <i class="fas fa-dollar-sign"></i>{{ $total }}
                        </p>
                    </div>
                    <div class="phone row">
                        <p class="col-md-6">
                            <i class="fas fa-phone-alt"></i>Contact-number:
                        </p>
                        <p class="col-md-6 text-right">
                            {{$user->phone_number}}
                        </p>
                    </div>
                    <div class="address row">
                        <p class="col-md-6">
                            <i class="fas fa-map-marker-alt"></i>Address:
                        </p>
                        <p class="col-md-6 text-right">
                            {{$user->address}}
                        </p>
                    </div>
                    <div class="client-status row">
                        <p class="col-md-6">
                            <i class="fas fa-star-half-alt"></i>Client status:
                        </p>
                        <p class="col-md-6 text-right">
                            {{$user->vaucher->type}} - {{$user->vaucher->value}}% off
                        </p>
                    </div>
                    <div class="total-price row">
                        <p class="col-md-6">
                            <i class="fas fa-dollar-sign"></i>Total price:
                        </p>
                    @if($user->vaucher->value)
                       <?php $total = $total - ($total*$user->vaucher->value)/100; ?>
                    @endif
                        <p class="col-md-6 text-right">
                            <i class="fas fa-dollar-sign"></i>{{$total}}
                        </p>
                    </div>
                    <button type="submit" class="order-btn">
                        Order
                    </button>
                </div>
            </div>
        </div>
    </div>
</form>
    <!-- Login Modal -->
    @include('partials.login')
    <!-- Registration Modal -->
    @include('partials.registration')

    @include('partials.tableOrder')
    
    @include('partials.contact')
    
    @include('partials.footer')

@endsection
