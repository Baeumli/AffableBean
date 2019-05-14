@extends('layouts.admin')
@section('content')
<h1>
    Orders
</h1>
<table class="table">
    <thead>
        <tr>
            <th scope="col">ID</th>
            <th scope="col">Confirmation Number</th>
            <th scope="col">Order Details</th>
            <th scope="col">Promo Code</th>
            <th scope="col">Order Date</th>
            <th scope="col">Actions</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($orders as $order)
        <tr>
            <td>{{$order->id}}</td>
            <td>{{$order->confirmation_number}}</td>
            <td>
                <a class="btn btn-primary" href="/admin/orders/{{$order->id}}">Show</a>
            </td>
        <td>{{$order->promo_code}}</td>
        <td>{{$order->updated_at}}</td>
        <td>
            <form class="form-inline" action="{{action('OrderController@complete', $order->id)}}" method="POST">
                @csrf @method('PUT')
                    <button class="btn btn-danger" type="submit">Complete Order</button>
            </form>
        </td>
        </tr>
        @endforeach
    </tbody>
</table>
@endsection