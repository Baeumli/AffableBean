@extends('layouts.admin')

@section('content')
    <h1>Order {{$order->confirmation_number}}</h1>
    <h3>Ordered Items</h3>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Name</th>
                <th scope="col">Description</th>
                <th scope="col">Category</th>
                <th scope="col">Price</th>
                <th scope="col">Quantity</th>
                <th scope="col">Stock</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($order->products as $product)
            <tr>
                <td>{{$product->id}}</td>
                <td>{{$product->name}}</td>
                <td>{{$product->description}}</td>
                <td>{{$product->category->name}}</td>
                <td>{{$product->price}}</td>
                <td>{{$product->pivot->quantity}}</td>
                <td>{{$product->in_stock}}</td>
            </tr>
            @endforeach
        </tbody>
    </table>

    <h3>Customer Information</h3>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Name</th>
                <th scope="col">Email</th>
                <th scope="col">Phone</th>
                <th scope="col">Address</th>
                <th scope="col">City Region</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>{{$order->user->id}}</td>
                <td>{{$order->user->name}}</td>
                <td>{{$order->user->email}}</td>
                <td>{{$order->user->phone}}</td>
                <td>{{$order->user->address}}</td>
                <td>{{$order->user->city_region}}</td>
            </tr>
        </tbody>
    </table>
@endsection