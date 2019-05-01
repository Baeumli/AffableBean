@extends('layouts.admin')

@section('content')

<h1>Create Product</h1>
    
    <form action="{{action('ProductController@store') }}" method="post" enctype="multipart/form-data">
        @csrf
            <div class="form-group">
                <label for="name">Name:</label>
                <input class="form-control" type="text" name="name">
                <label for="category">Category:</label>
                <select class="form-control" name="category">
                    <option value="">-</option>
                    @foreach ($categories as $category)
                        <option value="{{$category->id}}">{{$category->name}}</option>
                    @endforeach  
                </select>
                <label for="description">Description:</label>
                <input class="form-control" type="text" name="description">
                <label for="price">Price:</label>
                <input class="form-control" type="text" name="price">
                <label for="stock">Stock:</label>
                <input class="form-control" type="text" name="stock">
                <label for="image">Image:</label>
                <input class="form-control-file" type="file" name="image">
            </div>
    
            <div class="form-group">
                <button class="btn btn-primary" type="submit">Submit</button>
            </div>
         
    </form>
@endsection