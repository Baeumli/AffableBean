@extends('layouts.admin')

@section('content')
    <h1>Administrators
            <span><a class="btn btn-success float-right" href="/admin/categories/create">Create</a></span>
    </h1>
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
                    @foreach ($admins as $admin)
                <tr>
                <td>{{$admin->id}}</td>
                <td>{{$admin->name}}</td>
                <td>{{$admin->email}}</td>
                <td>{{$admin->phone ?? "-"}}</td>
                <td>{{$admin->address ?? "-"}}</td>
                <td>{{$admin->city_region ?? "-"}}</td>
                <td>
                            
                            <form class="form-inline" action="{{action('UserController@destroy', $admin)}}" method="POST">
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