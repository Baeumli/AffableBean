@extends('layouts.admin')

@section('content')
    
<h1>Create Category</h1>
    
    <form action="{{action('CategoryController@update', $category) }}" method="post" enctype="multipart/form-data">
        @method('PATCH')
        @csrf
            <div class="form-group">
                <label for="name">Name:</label>
                <input class="form-control" type="text" name="name" value="{{old('name', $category->name)}}">
                <label for="image">Image:</label>
                <input type="file" class="form-control-file" name="image" value="{{old('image', $category->image)}}">            
            </div>
    
            <div class="form-group">
                <button class="btn btn-primary" type="submit">Submit</button>
            </div>
         
    </form>
@endsection