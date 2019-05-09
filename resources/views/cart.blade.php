@extends('layouts.app')
@section('content')
<h1>Cart</h1>
<div class="row mb-4 ">
    <div class="col">
        <a class="btn btn-dark" href="/">Continue shopping</a>
    </div>
    @if ($cart != null)
    <div class="col">
        <form action="{{action('AppController@clearCart')}}" method="post">
    @csrf
    <button class="btn btn-dark" type="submit">Clear cart</button>
    </form>
</div>
<div class="col">
    <form action="{{action('PageController@checkout')}}" method="post">
        @csrf
        <button class="btn btn-dark" type="submit">Go to checkout</button>
    </form>
</div>
@endif

</div>
<div class="row">
    <div class="col">
        @if ($cart != null)
        <table class="table">
            <thead>
                <tr>
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
                @foreach ($cart->products as $product)
                <tr>
                    <td>{{$product->name}}</td>
                    <td>{{$product->description}}</td>
                    <td>&euro; {{$product->price}}</td>
                    <td>{{$product->pivot->quantity}}</td>
                    <td>&euro; {{number_format($product->price * $product->pivot->quantity, 2)}}</td>
                    <td>{{$product->in_stock}}</td>
                    <td>{{$product->image}}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
        <p>Subtotal: {{$cart->total_price}}</p>
        @else
        <p>Empty Cart</p>
        @endif
    </div>
</div>
@endsection