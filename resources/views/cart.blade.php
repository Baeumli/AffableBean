@extends('layouts.app') 
@section('content')
<h1>Cart</h1>
<div class="row mb-4 ">
    <div class="col">
        <a class="btn btn-dark" href="/">Continue shopping</a>
    </div>
    @if ($cart->isNotEmpty())
    <div class="col">
        <form action="{{action('CartController@clearCart')}}" method="post">
            @csrf
            <button class="btn btn-dark" type="submit">Clear cart</button>
        </form>
    </div>
        <div class="col">
            <form action="{{action('PageController@checkout')}}" method="post">
                @csrf
                <input type="hidden" name="total" value="{{($cart->sum('price', 2))}}">
                <button class="btn btn-dark" type="submit">Go to checkout</button>
            </form>
        </div>
    @endif
    
</div>
<div class="row">
    <div class="col">
            @if ($cart->isNotEmpty())
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Name</th>
                    <th scope="col">Description</th>
                    <th scope="col">Price</th>
                    <th scope="col">Quantity</th>
                    <th scope="col">Price Total</th>
                    <th scope="col">Stock</th>
                    <th scope="col">Image</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($cart as $product)
                <tr>
                    <td>{{$product->id}}</td>
                    <td>{{$product->name}}</td>
                    <td>{{$product->description}}</td>
                    <td>&euro; {{$product->price}}</td>
                    <td>
                        <p>Actions</p>
                    </td>
                    <td>
                        <p>&euro; {{$product->total}}</p>
                    </td>
                    <td>{{$product->in_stock}}</td>
                    <td>{{$product->image}}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
        <p>Subtotal: </p>
        @else
        <p>Empty Cart</p>
        @endif
    </div>
</div>
@endsection