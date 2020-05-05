@extends('layouts.header')

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
                <th style="padding: 10px;">Order</th>
            </tr>
        </thead>
        <tbody>
        @foreach($foods as $food)

            <tr>
                <td>{{$food->name}}</td>
                <td>{{$food->description}}</td>
                <td>{{$food->type->name}}</td>
                <td>{{$food->cuisine->name}}</td>
                <td>{{$food->price}}</td>
                <td><img style="width: 50px;" src="{{URL::to($food->photo_path)}}"></td>
                <td><a href="{{ route('addCard', ['id'=> $food->id ]) }}">Add to Card</a></td>
                </a></td>
            </tr>

        @endforeach

    </tbody>

</table>





@endsection