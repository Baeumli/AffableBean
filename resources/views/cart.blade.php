@extends('layouts.app')
@section('content')
<h1>Cart</h1>
<div class="row mb-4 ">
    <div class="col">
            <div class="float-left mr-3">
                <a class="btn btn-dark" href="/">Continue shopping</a>
            </div>
                @if ($cart != null)
                <div class="float-left mr-3">
                    <form action="{{action('AppController@clearCart')}}" method="post">
                        @csrf
                        <button class="btn btn-dark" type="submit">Clear cart</button>
                    </form>
                </div>
                <div class="float-left mr-3">
                    <form action="{{action('PageController@checkout')}}" method="post">
                        @csrf
                        <button class="btn btn-dark" type="submit">Proceed to checkout</button>
                    </form>
                </div>
            @endif
        </div>
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
                    <td class="align-middle">{{$product->name}}</td>
                    <td class="align-middle">{{$product->description}}</td>
                    <td class="align-middle">&euro; {{$product->price}}</td>
                    <td class="align-middle">
                        {{$product->pivot->quantity}}
                    </td>
                    <td class="align-middle">&euro; {{number_format($product->price * $product->pivot->quantity, 2)}}</td>
                    <td class="align-middle">{{$product->in_stock}}</td>
                    <td class="align-middle"><img src="{{asset('images/products/' . $product->image)}}" onerror="this.src='images/404.svg'" alt=""
                        class="card-img-top w-50">
                    </td>
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