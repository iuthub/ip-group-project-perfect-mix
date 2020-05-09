@extends('layouts.header')

@include('partials.alerts')

@section('content')
<div style="width: 40%; margin: auto;" class="modal-body">
    <h1 align="center">Add Food</h1>
<div class="row">
    <div class="col-md-12">
        <form action="{{ route('editPostFood') }}" method="post" enctype="multipart/form-data">
            <div class="form-group">
                <label for="title">Name</label>
                <input type="text" class="form-control" id="name" name="name" value="{{ $food->name }}">
            </div>
            <div class="form-group">
                <label for="content">Description</label>
                <textarea type="text" class="form-control" id="description" cols="30" rows="3" name="description">{{ $food->description }}</textarea>
            </div>
            <div class="form-group">
                <label for="title">Cuisine</label>
                <select class="form-control" id="selectCuisine" name="cuisine_id" required focus>
                    <option value="value={{ $food->cuisine_id }}" disabled selected>{{ $food->cuisine->name }}</option>
                    @foreach($cuisines as $cuisine)
                        <option value="{{$cuisine->id}}">{{ $cuisine->name }}</option>
                    @endforeach
                </select>

            </div>
            <div class="form-group">
                <label for="content">Type</label>
                <select class="form-control" id="type_id" name="type_id" required focus>
                    <option value="{{ $food->type_id }}" disabled selected>{{ $food->type->name }}</option>
                    @foreach($food_types as $food_type)
                        <option value="{{$food_type->id}}">{{ $food_type->name }}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <label for="title">Price</label>
                <input type="text" class="form-control" id="price" name="price" value=" {{ $food->price }}">
            </div>

            {{-- upload file https://plugins.krajee.com/file-avatar-upload-demo --}}
            <div class="custom-file">
                <label for="content">Photo</label>
                <img style="width: 200px;" src="{{URL::to($food->photo_path) }}">
                <input type="file" class="custom-file-input" id="customFile">
            </div>
            <div class="custom-file">
                <input type="file" class="custom-file-input" id="customFile" name="photo_path">
                <label class="custom-file-label" for="customFile">Choose File</label>
            </div>
            {{ csrf_field() }}
                
            <input type="hidden" name="id" value="{{ $food->id }}">
            <button style="margin-top: 10px;" type="submit" class="btn btn-success">Edit Food</button>
            <a style="margin-top: 10px;" href="{{route('getFoods')}}" class="btn btn-danger">Back</a>
        </form>
    </div>
</div>
</div>
@endsection
