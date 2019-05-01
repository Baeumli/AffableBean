@extends('layouts.admin')

@section('content')

        <h1>Edit Category</h1>
    
    <form action="{{action('CategoryController@update', $category) }}" method="post" enctype="multipart/form-data">
        @csrf
        @method('PUT')
            <div class="form-group">
                <label for="name">Name:</label>
            <input class="form-control" type="text" name="name" value="{{old('name', $category->name)}}">
                <label for="image">Image:</label>
                <input class="form-control-file" type="file" name="image" value="{{old('image', $category->image)}}">
            </div>
    
            <div class="form-group">
                <button class="btn btn-success" type="submit">Submit</button>
            </div>
         
    </form>
@endsection