@extends('layouts.header')
@section('title')
  <title>Admin Page</title>
@endsection
@include('partials.adminNav')

@include('partials.alerts')

@section('content')

<h1 align="center">
	Ordered foods lists
</h1>

	
<table class="table table-bordered">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Consumer</th>
      <th scope="col">Food Name</th>
      <th scope="col">Quantity</th>
      <th scope="col">Ordered date</th>
      <th scope="col">Order</th>
    </tr>
  </thead>
  <tbody>
<?php $i=1 ?>
@if(!count($procesess))
	<tr class="table-info">
    	<td colspan="6">No order yet</td>
    </tr>
@endif	
@foreach($procesess as $process)
    <form method="POST" action="{{route('acceptOrder')}}">
    	@csrf
    <tr class="table-warning">
      <th scope="row">{{$i++}}</th>
      <td>{{$process->full_name}}</td>
      <td>{{$process->name}}</td>
      <td>{{$process->quantity}}</td>
      <td>{{$process->created_at}}</td>
      <td>
      	<input type="hidden" name="id" value="{{ $process->id }}">
      	<button class="btn btn-success">Accept</button>
      </td>
    </tr>
	</form>
    @endforeach
  </tbody>
</table>




<h1 align="center">
	Ordered tables lists
</h1>

<table class="table table-bordered">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Consumer</th>
      <th scope="col">Table number</th>
      <th scope="col">Number of People</th>
      <th scope="col">Start Time</th>
      <th scope="col">End Time </th>
      <th scope="col">Book</th>
    </tr>
  </thead>
  <tbody>
<?php $i=1 ?>

@if(!count($tables))
	<tr class="table-info">
    	<td colspan="7">No order yet</td>
    </tr>
@endif	
@foreach($tables as $table)
    <form method="POST" action="{{route('acceptTable')}}">
    	@csrf
    <tr class="table-warning">
      <th scope="row">{{$i++}}</th>
      <td>{{$table->full_name}}</td>
      <td>{{$table->seat_number}}</td>
      <td>{{$table->number_of_people}}</td>
      <td>{{$table->timeStart}}</td>
      <td>{{$table->timeEnd}}</td>
      <td>
      	<input type="hidden" name="id" value="{{ $table->id }}">
      	<button class="btn btn-success">Accept</button>
      </td>
    </tr>
	</form>
    @endforeach
  </tbody>
</table>


<h1 align="center">
	Ordered Foods History lists
</h1>

<table class="table table-bordered">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Consumer</th>
      <th scope="col">Food Name</th>
      <th scope="col">Quantity</th>
      <th scope="col">Ordered date</th>
      <th scope="col">Order</th>
    </tr>
  </thead>
  <tbody>
<?php $i=1 ?>
@if(!count($histories))
	<tr class="table-info">
    	<td colspan="6">No order yet</td>
    </tr>
@endif	
@foreach($histories as $history)
    <form method="POST" action="{{route('acceptOrder')}}">
    	@csrf
    <tr class="table-success">
      <th scope="row">{{$i++}}</th>
      <td>{{$history->full_name}}</td>
      <td>{{$history->name}}</td>
      <td>{{$history->quantity}}</td>
      <td>{{$history->created_at}}</td>
      <td><button disabled class="btn btn-info">Accepted</button></td>
    </tr>
	</form>
    @endforeach
  </tbody>
</table>



@endsection
