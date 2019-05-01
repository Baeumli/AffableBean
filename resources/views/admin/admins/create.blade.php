@extends('layouts.admin') 
@section('content')

<h1>Create Admin</h1>

<form action="{{action('AdminController@store') }}" method="post">
    @csrf
    <div class="form-group">
        <label for="name">Name:</label>
        <input class="form-control" type="text" name="name">
        <label for="email">Email:</label>
        <input class="form-control" type="email" name="email">
        <label for="password">Password:</label>
        <input class="form-control" type="password" name="password">
        <label for="phone">Phone:</label>
        <input class="form-control" type="text" name="phone">
        <label for="address">Address:</label>
        <input class="form-control" type="text" name="address">
        <label for="city_region">City Region:</label>
        <input class="form-control" type="text" name="city_region">
    </div>

    <div class="form-group">
        <button class="btn btn-success" type="submit">Submit</button>
    </div>

</form>
@endsection