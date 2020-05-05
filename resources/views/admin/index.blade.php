@extends('layouts.header')

@section('content')

<a class="nav-link" id="log-out"href="{{ url('/logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();"> Logout </a>
                    <form id="logout-form" action="{{ url('/logout') }}" method="POST">
                    @csrf
                    </form>

<h1 align="center">Users</h1>
<table>
		<thead>
            <tr>
                <th style="padding: 10px;">Name</th>
                <th style="padding: 10px;">Address</th>
                <th style="padding: 10px;">Role</th>
                <th style="padding: 10px;">Email</th>
                <th style="padding: 10px;">Phone number</th>
                <th style="padding: 10px;">Joining date</th>
                <th style="padding: 10px;">Status</th>
                <th style="padding: 10px;">Edit</th>
                <th style="padding: 10px;">Delete</th>
            </tr>
        </thead>
        <tbody>

		@foreach($users as $user)

			<tr>
                <td>{{$user->full_name}}</td>
                <td>{{$user->address}}</td>
                <td>{{$user->role->name}}</td>
                <td>{{$user->email}}</td>
                <td>{{$user->phone_number}}</td>
                <td>{{$user->created_at->format('d/m/Y')}}</td>
                <td>{{$user->vaucher->type}}</td>
                <td><a href="{{ route('getAdminUserEdit', ['id'=> $user->id ]) }}">Edit</a></td>
                <td><a href="{{ route('getAdminUserDelete', ['id'=> $user->id ]) }}">Delete</a></td>
            </tr>

		@endforeach

    </tbody>

</table>






{{-- food --}}
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
                <th style="padding: 10px;">Edit</th>
                <th style="padding: 10px;">Delete</th>
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
                <td><a href="{{ route('editPostFood', ['id'=> $user->id ]) }}">Edit</a></td>
                <td><a href="{{ route('deletePostFood', ['id'=> $user->id ]) }}">Delete</a></td>
            </tr>

        @endforeach

    </tbody>

</table>








@endsection
