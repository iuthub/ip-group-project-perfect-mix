@extends('layouts.header')

@include('partials.alerts')

@section('content')

<div style="width: 40%; margin: auto;" class="modal-body">
    <form method="POST" action="{{ route('postAdminUserEdit') }}">
        @csrf
        <h5 class="text-center text-primary"><strong>Edit Information</strong></h5>
        <div class="form-group" id="loginFormEmail">
            <input type="text" class="form-control" placeholder="Full Name" name="name" value="{{$user->full_name}}">
        </div>
        <div class="form-group" id="loginFormEmail">
            <input type="address" class="form-control" placeholder="Address" name="address" value="{{$user->address}}">
        </div>
        <div class="form-group" id="loginFormEmail">
            <input type="email" class="form-control" placeholder="Email" name="email" value="{{$user->email}}" readonly>
        </div>
        <div class="form-group" id="loginFormPassword">
            <input type="text" class="form-control" placeholder="Phone Number" name="phone_number" value="{{$user->phone_number}}">
        </div>
        <div class="form-group" id="loginFormEmail">
            <input type="password" class="form-control" placeholder="New Password" name="password" value="">
        </div>

        <div class="form-group" id="loginFormEmail">
            <input type="password" class="form-control" placeholder="New Confirm Password" name="password_confirmation" value="">
        </div>

        
        @if(Auth::user()->role->name=='admin')
        <div class="form-group" id="loginFormEmail">
            <select class="form-control" id="role_id" name="role_id" required focus>
                    <option value="{{$user->role->id}}" disabled selected>{{$user->role->name}}</option>
                    @foreach($roles as $role)
                        <option value="{{$role->id}}">{{ $role->name }}</option>
                    @endforeach
            </select>
        </div>

        <div class="form-group" id="loginFormEmail">
            <select class="form-control" id="vaucher_id" name="vaucher_id" required focus>
                    <option value="{{$user->vaucher->id}}" disabled selected>{{$user->vaucher->type}} - {{$user->vaucher->value }}%</option>
                    @foreach($vauchers as $vaucher)
                        <option value="{{$vaucher->id}}">{{ $vaucher->type }} - {{$vaucher->value }}%</option>
                    @endforeach
            </select>
        </div>
        @endif
        <input type="hidden" name="id" value="{{ $user->id }}">
        <button style="margin-top: 10px;" type="submit" class="btn btn-success">Edit User</button>
    <a style="margin-top: 10px;" href="{{route('getUsers')}}" class="btn btn-danger">Back</a>
    </form>
</div>


@endsection
