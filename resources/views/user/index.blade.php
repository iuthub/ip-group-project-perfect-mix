@extends('layouts.header')


<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
 
@section('content')

<a class="nav-link" id="log-out"href="{{ url('/logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();"> Logout </a>
                    <form id="logout-form" action="{{ url('/logout') }}" method="POST">
                    @csrf
                    </form>


<h1 align="center">Foods</h1>

<table>
        <thead>
            <tr>
                <th style="padding: 10px;">Name</th>
                <th style="padding: 10px;">Description</th>
                <th style="padding: 10px;">Type</th>
                <th style="padding: 10px;">Cuisine</th>
                <th style="padding: 10px;">Price</th>
                <th style="padding: 10px;">Photo</th>
                <th style="padding: 10px;">Quantity</th>
                <th style="padding: 10px;">Order</th>
            </tr>
        </thead>
        <tbody>
        @foreach($foods as $food)
			<form method="POST" action="{{ route('addToCard') }}">
				@csrf
            <tr>
                <td>{{$food->name}}</td>
                <td>{{$food->description}}</td>
                <td>{{$food->type->name}}</td>
                <td>{{$food->cuisine->name}}</td>
                <td>{{$food->price}}</td>
                <td><img style="width: 50px;" src="{{URL::to($food->photo_path)}}"></td>
                <td>
                	<input style="width: 70px;" min="1" max="99" type="number" value="1" class="form-control quantity" name="quantity" />
                </td>
                    
                <td>
                	<input type="hidden" name="id" value="{{ $food->id }}">
                	<button class="submit" align="center">Add to Card</button>
                	{{-- <a href="{{ route('addCard', ['id'=> $food->id ,'quantity'=>$quantity->value]) }}">Add to Card</a></td>
               	 	</a> --}}
            	</td>
            </tr>
			</form>
        @endforeach

    </tbody>

</table>


<div class="row">
        <div class="col-lg-12 col-sm-12 col-12 main-section">
            <div class="dropdown">
                <button type="button" class="btn btn-info" data-toggle="dropdown">
                    <i class="fa fa-shopping-cart" aria-hidden="true"></i> 
                    Cart 
                    <span class="badge badge-pill badge-danger">
                    	{{ count((array) session('cart')) }}
                	</span>
                </button>

                <div class="dropdown-menu">
                    <div class="row total-header-section">
                        
                        <div class="col-lg-6 col-sm-6 col-6">
                            <i class="fa fa-shopping-cart" aria-hidden="true"></i>
                            <span class="badge badge-pill badge-danger">
                            	{{ count((array) session('cart')) }}
                            </span>
                        </div>
 
                        <?php $total = 0 ?>
                        @foreach( (array) session('cart') as $id => $details)
                            <?php $total += $details['price'] * $details['quantity'] ?>
                        @endforeach
 
                        <div class="col-lg-6 col-sm-6 col-6 total-section text-right">
                            <p>Total: <span class="text-info">$ {{ $total }}</span></p>
                        </div>
                    
                    </div>
 
                    @if(session('cart'))
                        @foreach(session('cart') as $id => $details)
                            <div class="row cart-detail">
                                <div class="col-lg-4 col-sm-4 col-4 cart-detail-img">
                                    <img style="width: 50px;" src="{{ URL::to($details['photo']) }}" />
                                </div>
                                <div class="col-lg-8 col-sm-8 col-8 cart-detail-product">
                                    <p>{{ $details['name'] }}</p>
                                    <span class="price text-info"> ${{ $details['price'] }}</span> <span class="count"> Quantity:{{ $details['quantity'] }}</span>
                                </div>
                            </div>
                            <hr/>
                        @endforeach
                    @endif

                    <div class="row">
                        <div class="col-lg-12 col-sm-12 col-12 text-center checkout">
                            <a href="{{ route('getCard') }}" class="btn btn-primary btn-block">View all</a>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>




@endsection