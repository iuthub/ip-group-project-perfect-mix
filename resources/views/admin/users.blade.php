@extends('layouts.header')

@include('partials.adminNav')

@include('partials.alerts')

@section('content')


<h1 align="center">Users</h1>

<a style="margin: 10px;" href="{{route('getAddUser')}}" class="btn btn-success">Add User</a>

<table class="table table-bordered">
		<thead>
            <tr>
                <th style="padding: 10px;">#</th>
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
        <?php $i=1 ?>
		@foreach($users as $user)

			<tr>
                <td>{{$i++}}</td>
                <td>{{$user->full_name}}</td>
                <td>{{$user->address}}</td>
                <td>{{$user->role->name}}</td>
                <td>{{$user->email}}</td>
                <td>{{$user->phone_number}}</td>
                <td>{{$user->created_at->format('d/m/Y')}}</td>
                <td>{{$user->vaucher->type}}</td>
                <td><a href="{{ route('getAdminUserEdit', ['id'=> $user->id ]) }}" class="btn btn-info">Edit</a></td>
                <td><a href="{{ route('getAdminUserDelete', ['id'=> $user->id ]) }}" class="btn btn-danger">Delete</a></td>
            </tr>

		@endforeach

    </tbody>

</table>



@endsection