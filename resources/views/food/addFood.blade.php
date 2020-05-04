@extends('layouts.header')

@include('partials.alerts')

@section('content')
<div class="row">
    <div class="col-md-12">
        <form action="{{ route('addPostFood') }}" method="post" enctype="multipart/form-data">
            <div class="form-group">
                <label for="title">Name</label>
                <input type="text" class="form-control" id="name" name="name">
            </div>
            <div class="form-group">
                <label for="content">Description</label>
                <input type="text" class="form-control" id="description" name="description">
            </div>
            <div class="form-group">
                <label for="title">Cuisine</label>
                <select class="form-control" id="selectCuisine" name="cuisine_id" required focus>
                    <option value="" disabled selected>Please select cuisine</option>
                    @foreach($cuisines as $cuisine)
                        <option value="{{$cuisine->id}}">{{ $cuisine->name }}</option>
                    @endforeach
                </select>

            </div>
            <div class="form-group">
                <label for="content">Type</label>
                <select class="form-control" id="type_id" name="type_id" required focus>
                    <option value="" disabled selected>Please select food type</option>
                    @foreach($food_types as $food_type)
                        <option value="{{$food_type->id}}">{{ $food_type->name }}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <label for="title">Price</label>
                <input type="text" class="form-control" id="price" name="price">
            </div>
            <div class="form-group">
                <label for="content">Photo</label>
                <input type="file" class="form-control" id="photo_path" name="photo_path">
            </div>
{{--            @foreach($tags as $tag)
                <div class="checkbox">
                    <label>
                        <input type="checkbox" name="tags[]" value="{{ $tag->id }}"> {{ $tag->name }}
                    </label>
                </div>
            @endforeach--}}
            {{ csrf_field() }}
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
</div>
@endsection
