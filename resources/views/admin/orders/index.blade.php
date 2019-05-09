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
                <a class="btn btn-primary" data-toggle="collapse" href="#collapseExample" role="button"
                    aria-expanded="false" aria-controls="collapseExample">
                    Show
                </a>
            </td>
        <td>{{$order->promo_code}}</td>
        <td>{{$order->updated_at}}</td>
        <td>
            <form class="form-inline" action="{{action('OrderController@destroy', $order)}}" method="POST">
                @csrf @method('DELETE')
                <div class="btn-group" role="group" aria-label="Basic example">
                    <a class="btn btn-dark" href="/admin/categories/{{$order->id}}/edit">Edit</a>
                    <button class="btn btn-danger" type="submit">Delete</button>
                </div>
            </form>
        </td>
        </tr>
        <tr class="collapse" id="collapseExample">
            <td colspan="6">ayy</td>
                
        </tr>
        @endforeach
    </tbody>
</table>
@endsection