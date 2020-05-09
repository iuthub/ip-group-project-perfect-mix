@extends('layouts.header')

@include('partials.alerts')

@section('content')
<div style="width: 40%; margin: auto;" class="modal-body">

<form method="POST" action="{{ route('postAddUser') }}">
    @csrf
    <h1 class="text-center text-primary"><strong>Add User</strong></h1>
    <div class="form-group" id="loginFormEmail">
        <input type="text" class="form-control" placeholder="Full Name" name="name">
    </div>
    <div class="form-group" id="loginFormEmail">
        <input type="address" class="form-control" placeholder="Address" name="address">
    </div>
    <div class="form-group" id="loginFormEmail">
        <input type="email" class="form-control" placeholder="Email" name="email">
    </div>
    <div class="form-group" id="loginFormPassword">
        <input type="text" class="form-control" placeholder="Phone Number" name="phone_number">
    </div>
    <div class="form-group" id="loginFormEmail">
        <input type="password" class="form-control" placeholder="Password" name="password">
    </div>
    <button style="margin-top: 10px;" type="submit" class="btn btn-success">Add User</button>
    <a style="margin-top: 10px;" href="{{route('getUsers')}}" class="btn btn-danger">Back</a>
</form>
</div>
@endsection