@extends('layouts.app') 
@section('content')
<h1>Checkout</h1>
<p>In order to purchase the items in your shopping cart, please provide us with the following information:</p>
<div class="row">
    <div class="col-7">
    <form action="{{action('OrderController@store')}}" method="post">
        @csrf
            <input type="text" name="name">
            <input type="email" name="email">
            <input type="text" name="phone">
            <input type="text" name="address">
            <select name="city_region">
                <option>1</option>
                <option>2</option>
                <option>3</option>
                <option>4</option>
                <option>5</option>
            </select>
            <input type="text" name="cc_number">
            <button type="submit">Purchase</button>
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
                    <li class="list-group-item">Subtotal: <span>&euro; {{$total}}</span></li>
                    <li class="list-group-item">Surcharge: <span>&euro; 3.00</span></li>
                    <li class="list-group-item">Total: <span>&euro; {{$total + 3.00}}</span></li>
                </ul>
            </div>
        </div>
    </div>
</div>
@endsection