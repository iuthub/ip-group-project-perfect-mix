@extends('layouts.fantasy')

@section('content')
<div class="row">
    <div class="col-md-12">
        <form action="{{ route('food.addFood') }}" method="post">
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
                <select class="form-control" id="selectCuisine" name="cuisine_selected" required focus>
                    <option value="" disabled selected>Please select cuisine</option>
{{--                    @foreach($cuisines as $cuisine)
                        <option value="{{$cuisine->id}}">{{ $cuisine->name }}</option>
                    @endforeach--}}
                </select>
                <label class="col-sm-4 col-form-label"  id="displayCuisine">Show selected cuisine here</label>
{{--                <script type="text/javascript">
                    var mytextbox = document.getElementById('displayCuisine');
                    var mydropdown = document.getElementById('selectCuisine');
                    mydropdown.onchange = function(){
                        mytextbox.value = mytextbox.value  + this.value; //to appened
                        mytextbox.innerHTML = this.value;
                    }
                </script>--}}
            </div>
            <div class="form-group">
                <label for="content">Type</label>
                <select class="form-control" id="selectFoodType" name="food_type_selected" required focus>
                    <option value="" disabled selected>Please select food type</option>
                    {{--                    @foreach($foods as $food)
                                            <option value="{{$food->id}}">{{ $food->name }}</option>
                                        @endforeach--}}
                </select>
                <label class="col-sm-4 col-form-label"  id="displayCuisine">Show selected food type here</label>
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
