@extends('layouts.header')

@include('partials.alerts')

@section('content')
<div class="row">
    <div class="col-md-12">
        <form action="{{ route('editPostFood') }}" method="post" enctype="multipart/form-data">
            <div class="form-group">
                <label for="title">Name</label>
                <input type="text" class="form-control" id="name" name="name" value="{{ $food->name }}">
            </div>
            <div class="form-group">
                <label for="content">Description</label>
                <input type="text" class="form-control" id="description" name="description" value="{{ $food->description }}" >
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
            <div class="form-group">
                <label for="content">Photo</label>
                <img style="width: 200px;" src="{{URL::to($food->photo_path) }}">
                <input type="file" class="form-control" id="photo_path" name="photo_path">
            </div>
            {{ csrf_field() }}
                

            <input type="hidden" name="id" value="{{ $food->id }}">
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
</div>
@endsection
