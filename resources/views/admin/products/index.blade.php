@extends('layouts.admin') 
@section('content')
<h1>Products
        <span><a class="btn btn-success float-right" href="/admin/products/create">Create</a></span>
</h1>

<select class="custom-select mb-4">
        <option selected>All</option>
        <option value="1">One</option>
        <option value="2">Two</option>
        <option value="3">Three</option>
</select>

<table class="table">
    <thead>
        <tr>
            <th scope="col">ID</th>
            <th scope="col">Name</th>
            <th scope="col">Description</th>
            <th scope="col">Category</th>
            <th scope="col">Price</th>
            <th scope="col">Stock</th>
            <th scope="col">Actions</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($products as $product)
        <tr>
            <td>{{$product->id}}</td>
            <td>{{$product->name}}</td>
            <td>{{$product->description}}</td>
            <td>{{$product->category->name ?? '-'}}</td>
            <td>{{$product->price}}</td>
            <td>{{$product->in_stock}}</td>
            <td>
                <form class="form-inline" action="{{action('ProductController@destroy', $product)}}" method="POST">
                    @csrf @method('DELETE')
                    <div class="btn-group" role="group" aria-label="Basic example">
                        <a class="btn btn-dark" href="/admin/products/{{$product->id}}/edit">Edit</a>
                        <button class="btn btn-danger" type="submit">Delete</button>
                    </div>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
@endsection