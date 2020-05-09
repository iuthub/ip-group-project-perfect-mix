@extends ('layouts.header')
@section('title')
  <title>Order Status</title>
@endsection
@include('partials.navbar')

@include('partials.alerts')

@section('content')

    <section class="dashboard-header position-relative">
        <div class="title">
            <h3>Welcome, {{$user->full_name}}!</h3>
        </div>
    </section>

    <div class="container">
        <h1 align="center">Pending Foods</h1>

<table class="table table-bordered">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Food Name</th>
      <th scope="col">Quantity</th>
      <th scope="col">Ordered date</th>
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
      <td>{{$process->name}}</td>
      <td>{{$process->quantity}}</td>
      <td>{{$process->created_at}}</td>
    </tr>
    </form>
    @endforeach
  </tbody>
</table>


<h1 align="center">Pending Tables</h1>
<table class="table table-bordered">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Table number</th>
      <th scope="col">Number of People</th>
      <th scope="col">Start Time</th>
      <th scope="col">End Time </th>
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
      <td>{{$table->seat_number}}</td>
      <td>{{$table->number_of_people}}</td>
      <td>{{$table->timeStart}}</td>
      <td>{{$table->timeEnd}}</td>
    </tr>
    </form>
    @endforeach
  </tbody>
</table>


    </div>

    <!-- Login Modal -->
	@include('partials.login')
    <!-- Registration Modal -->
    @include('partials.registration')
    <!-- Edit Profile Modal -->
	@include('partials.edit')

    @include('partials.tableOrder')
    
    @include('partials.contact')
    <!-- Footer -->
	@include('partials.footer')
@endsection
