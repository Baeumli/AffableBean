@extends('layouts.app') 
@section('content')
<h1>Cart</h1>

<table class="table">
    <thead>
        <tr>
            <th scope="col">ID</th>
            <th scope="col">Name</th>
            <th scope="col">Description</th>
            <th scope="col">Quantity</th>
            <th scope="col">Price</th>
            <th scope="col">Stock</th>
            <th scope="col">Image</th>
            <th scope="col">Actions</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($products as $product)
        <tr>
            <td>{{$product->id}}</td>
            <td>{{$product->name}}</td>
            <td>{{$product->description}}</td>
            <td>{{$product->quantity}}</td>
            <td>{{$product->price}}</td>
            <td>{{$product->in_stock}}</td>
            <td>{{$product->image}}</td>
            <td>
                <form class="form-inline" action="{{action('AppController@removeFromCart', $product->id)}}" method="POST">
                    @csrf
                    <div class="btn-group" role="group" aria-label="Basic example">
                        <button class="btn btn-danger" type="submit">Remove</button>
                    </div>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
@endsection