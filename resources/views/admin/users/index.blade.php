@extends('layouts.admin')

@section('content')
    <h1>Customers</h1>
    <table class="table">
            <thead>
              <tr>
                <th scope="col">ID</th>
                <th scope="col">Name</th>
                <th scope="col">Email</th>
                <th scope="col">Phone</th>
                <th scope="col">Address</th>
                <th scope="col">City Region</th>
                <th scope="col">Actions</th>
              </tr>
            </thead>
            <tbody>
                    @foreach ($users as $user)
                <tr>
                <td>{{$user->id}}</td>
                <td>{{$user->name}}</td>
                <td>{{$user->email}}</td>
                <td>{{$user->phone ?? "-"}}</td>
                <td>{{$user->address ?? "-"}}</td>
                <td>{{$user->city_region ?? "-"}}</td>
                <td>
                            
                            <form class="form-inline" action="{{action('UserController@destroy', $user)}}" method="POST">
                                @csrf @method('DELETE')

                                <div class="btn-group" role="group" aria-label="Basic example">
                                    <a class="btn btn-dark" href="#">Edit</a>
                                    <button class="btn btn-danger" type="submit">Delete</button>  
                                </div>
                                         
                            </form>
                    
                </td>
              </tr>
              @endforeach
            </tbody>
          </table>
    
@endsection