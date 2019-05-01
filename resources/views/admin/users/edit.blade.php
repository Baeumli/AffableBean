@extends('layouts.admin') 
@section('content')

<h1>Edit User</h1>

<form action="{{action('UserController@update', $user) }}" method="post">
    @csrf
    @method('PUT')
    <div class="form-group">
        <label for="name">Name:</label>
        <input class="form-control" type="text" name="name" value="{{old('name', $user->name)}}">
        <label for="email">Email:</label>
        <input class="form-control" type="email" name="email" value="{{old('email', $user->email)}}">
        <label for="phone">Phone:</label>
        <input class="form-control" type="text" name="phone" value="{{old('phone', $user->phone)}}">
        <label for="address">Address:</label>
        <input class="form-control" type="text" name="address" value="{{old('address', $user->address)}}">
        <label for="city_region">City Region:</label>
        <input class="form-control" type="text" name="city_region" value="{{old('city_region', $user->city_region)}}">
    </div>

    <div class="form-group">
        <button class="btn btn-success" type="submit">Submit</button>
    </div>

</form>
@endsection