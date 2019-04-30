@extends('layouts.app') 
@section('content')
<h1>Cart</h1>
<div class="row mb-4 ">
    <div class="col">
        <a class="btn btn-dark" href="/">Continue shopping</a>
    </div>
    @if ($products->isNotEmpty())
    <div class="col">
        <form action="{{action('AppController@clearCart')}}" method="post">
            @csrf
            <button class="btn btn-dark" type="submit">Clear cart</button>
        </form>
    </div>
        <div class="col">
            <form action="{{action('PageController@checkout')}}" method="post">
                @csrf
                <input type="hidden" name="total" value="{{($products->sum('total', 2))}}">
                <button class="btn btn-dark" type="submit">Go to checkout</button>
            </form>
        </div>
    @endif
    
</div>
<div class="row">
    <div class="col">
            @if ($products->isNotEmpty())
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
                @foreach ($products as $product)
                <tr>
                    <td>{{$product->id}}</td>
                    <td>{{$product->name}}</td>
                    <td>{{$product->description}}</td>
                    <td>&euro; {{$product->price}}</td>
                    <td>
                        <span class="float-right"><form action="{{action('AppController@addToCart', $product->id)}}" method="POST">
                                        @csrf
                                        <button class="btn btn-danger" type="submit">+</button>
                                    </form></span>

                            <span class="float-none">{{$product->quantity}}</span>
                   
                        <span class="float-left"><form action="{{action('AppController@removeFromCart', $product->id)}}" method="POST">
                                        @csrf
                                        <button class="btn btn-danger" type="submit">-</button>
                                    </form></span>
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
        <p>Subtotal: &euro; {{number_format($products->sum('total'), 2)}}</p>
        @else
        <p>Empty Cart</p>
        @endif
    </div>
</div>
@endsection