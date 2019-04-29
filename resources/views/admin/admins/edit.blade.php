@extends('layouts.admin')

@section('content')

        <h1>Edit Admin</h1>
    
    <form action="{{action('UserController@update', $admin) }}" method="post">
        @csrf
            <div class="form-group">
                <label for="name">Name:</label>
            <input class="form-control" type="text" name="name" value="{{old('name', $admin->name)}}">
            <label for="email">Email:</label>
            <input class="form-control" type="email" name="email" value="{{old('email', $admin->email)}}">
            <label for="phone">Phone:</label>
            <input class="form-control" type="text" name="phone" value="{{old('phone', $admin->phone)}}">
            <label for="address">Address:</label>
            <input class="form-control" type="text" name="address" value="{{old('address', $admin->address)}}">
            <label for="city_region">City Region:</label>
            <input class="form-control" type="text" name="city_region" value="{{old('city_region', $admin->city_region)}}">
            </div>
    
            <div class="form-group">
                <button class="btn btn-success" type="submit">Submit</button>
            </div>
         
    </form>
@endsection