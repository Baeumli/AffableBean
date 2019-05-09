@extends('layouts.app') 
@section('content')
<h1>Checkout</h1>
<p>In order to purchase the items in your shopping cart, please provide us with the following information:</p>
<div class="row">
    <div class="col-7">
    <form action="{{action('OrderController@store')}}" method="post">
        @csrf

    <div class="form-group">
            <label for="name">Name:</label>
            <input class="form-control" type="text" name="name" value="{{old('name', $order->user->name)}}">
            <label for="email">Email:</label>
            <input class="form-control" type="email" name="email" value="{{old('email', $order->user->email)}}">
            <label for="phone">Phone:</label>
            <input class="form-control" type="text" name="phone" value="{{old('phone', $order->user->phone)}}">
            <label for="address">Address:</label>
            <input class="form-control" type="text" name="address" value="{{old('address', $order->user->address)}}">
            <label for="city_region">Prague:</label>
            <select class="form-control" name="city_region" value="{{old('city_region', $order->user->city_region)}}">
                <option>1</option>
                <option>2</option>
                <option>3</option>
                <option>4</option>
                <option>5</option>
            </select>
            <label for="cc_number">Credit card number:</label>
            <input class="form-control" type="text" name="cc_number">
        <input type="hidden" name="user" value="{{$order->user->id}}">
    </div>
    <div class="input-group">
            <button type="submit">Purchase</button>
    </div>
    
            
        </form>
    </div>
    <div class="col-5">
        <ul>
            <li>Next-day delievery is guaranteed</li>
            <li>A &euro; 3.00 delivery surcharge is applied to all purchase orders</li>
        </ul>
        <div class="card">
            <div class="card-body">
                <ul class="list-group">
                    <li class="list-group-item">Subtotal: <span>&euro; {{$order->total_price}}</span></li>
                    <li class="list-group-item">Surcharge: <span>&euro; 3.00</span></li>
                    <li class="list-group-item">Total: <span>&euro; {{$order->total_price + 3.00}}</span></li>
                </ul>
            </div>
        </div>
    </div>
</div>
@endsection