@extends('layouts.header')

@include('partials.adminNav')

@section('content')

<div style="display: flex;">
	<div style="flex-grow: 1; padding: 20px;" >
		<h1 align="center">Types</h1>
<form method="POST" action="{{route('postAddFoodType')}}" enctype="multipart/form-data">
	@csrf
	<input type="text" class="form-control" placeholder="Type Name" name="name" required>
	<div style="width: 89%;" class="custom-file">
        <input type="file" class="custom-file-input" id="customFile" name="photo_path">
        <label class="custom-file-label" for="customFile">Choose File</label>
    </div>
	<button style="width: 10%; margin-top:7px; " type="submit" class="btn btn-success">Add</button>
</form>

<table class="table table-bordered table table-striped">
	<thead>
        <tr>
            <th style="padding: 10px;">#</th>
            <th style="padding: 10px;">Name</th>
            <th style="padding: 10px;">Photo</th>
            <th style="padding: 10px;">Delete</th>
        </tr>
    </thead>
    <tbody>
    <?php $i=1 ?>
    @foreach($types as $type)
        <tr>
            <td>{{$i++}}</td>
            <td>{{$type->name}}</td>
            <td><img style="width: 50px;" src="{{URL::to($type->photo_path)}}"></td>
            <td><a href="{{ route('deleteGetFoodType', ['id'=> $type->id ]) }}" class="btn btn-danger">Delete</a></td>
        </tr>
    @endforeach
	</tbody>
</table>
	</div>
	<div style="flex-grow: 1; padding: 20px;">
		<h1 align="center">Cuisines</h1>

<form method="POST" action="{{route('postAddFoodCuisine')}}" enctype="multipart/form-data">
	@csrf
	<input type="text" class="form-control" placeholder="Cuisine Name" name="name" required>
	<div style="width: 89%;" class="custom-file">
        <input type="file" class="custom-file-input" id="customFile" name="photo_path">
        <label class="custom-file-label" for="customFile">Choose File</label>
    </div>
	<button style="width: 10%; margin-top:7px; " type="submit" class="btn btn-success">Add</button>
</form>

<table class="table table-bordered table table-striped">
	<thead>
        <tr>
            <th style="padding: 10px;">#</th>
            <th style="padding: 10px;">Name</th>
            <th style="padding: 10px;">Photo</th>
            <th style="padding: 10px;">Delete</th>
        </tr>
    </thead>
    <tbody>
    <?php $i=1 ?>
    @foreach($cuisines as $cuisine)
        <tr>
            <td>{{$i++}}</td>
            <td>{{$cuisine->name}}</td>
            <td><img style="width: 50px;" src="{{URL::to($cuisine->photo_path)}}"></td>
            <td><a href="{{ route('deleteGetFoodCuisine', ['id'=> $cuisine->id ]) }}" class="btn btn-danger">Delete</a></td>
        </tr>
    @endforeach
	</tbody>
</table>
	</div>
</div>
<h1 align="center">Foods</h1>

<a style="margin: 10px;" href="{{route('addGetFood')}}" class="btn btn-success">Add Food</a>
<table class="table table-bordered table table-striped">
        <thead>
            <tr>
                <th style="padding: 10px;">#</th>
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
        <?php $i=1 ?>
        @foreach($foods as $food)

            <tr>
                <td>{{$i++}}</td>
                <td>{{$food->name}}</td>
                <td>{{$food->description}}</td>
                <td>{{$food->type->name}}</td>
                <td>{{$food->cuisine->name}}</td>
                <td>{{$food->price}}</td>
                <td><img style="width: 50px;" src="{{URL::to($food->photo_path)}}"></td>
                <td><a href="{{ route('editGetFood', ['id'=> $food->id ]) }}" class="btn btn-info">Edit</a></td>
                <td><a href="{{ route('deletePostFood', ['id'=> $food->id ]) }}" class="btn btn-danger">Delete</a></td>
            </tr>

        @endforeach

    </tbody>

</table>

@endsection