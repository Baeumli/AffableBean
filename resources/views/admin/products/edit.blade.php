@extends('layouts.admin')

@section('content')
    
    <div class="container">
        <h1>Edit Product</h1>
    
    <form action="{{action('ProductController@update', $product) }}" method="post" enctype="multipart/form-data">
        @csrf
        @method('PUT')
            <div class="form-group">
                <label for="name">Name:</label>
                <input class="form-control" type="text" name="name" value="{{old('name', $product->name)}}">
                <label for="category">Category:</label>
                <select class="form-control" name="category">
                    <option value="">-</option>
                    @foreach ($categories as $category)
                        <option value="{{$category->id}}" {{(old('name', $category->name) == $product->category->name ? "selected":"")}}>{{$category->name}}</option>
                    @endforeach  
                </select>
                <label for="description">Description:</label>
            <input class="form-control" type="text" name="description" value="{{old('description', $product->description)}}">
                <label for="price">Price:</label>
                <input class="form-control" type="text" name="price" value="{{old('price', $product->price)}}">
                <label for="stock">Stock:</label>
                <input class="form-control" type="text" name="stock" value="{{old('in_stock', $product->in_stock)}}">
                <label for="image">Image:</label>
                <input class="form-control-file" type="file" name="image">
            </div>
    
            <div class="form-group">
                <button class="btn btn-primary" type="submit">Submit</button>
            </div>
         
    </form>
</div>  
@endsection