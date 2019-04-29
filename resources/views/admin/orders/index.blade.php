@extends('layouts.admin') 
@section('content')
<h1>
    Orders
</h1>


<table class="table">
    <thead>
        <tr>
            <th scope="col">ID</th>
            <th scope="col">Name</th>
            <th scope="col">Image</th>
            <th scope="col">Actions</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($orders as $order)
        <tr>
            <td>{{$order->id}}</td>
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
        @endforeach
    </tbody>
</table>
@endsection