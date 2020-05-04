@extends('layouts.header')

@section('content')

<a class="nav-link" id="log-out"href="{{ url('/logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();"> Logout </a>
                    <form id="logout-form" action="{{ url('/logout') }}" method="POST">
                    @csrf
                    </form>

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


@endsection
