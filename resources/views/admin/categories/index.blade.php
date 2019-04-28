@extends('layouts.admin') 
@section('content')
<h1>
    Categories
    <span><a class="btn btn-success float-right" href="/admin/categories/create">Create</a></span>
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
        @foreach ($categories as $category)
        <tr>
            <td>{{$category->id}}</td>
            <td>{{$category->name}}</td>
            <td>{{$category->image}}</td>
            <td>
                <form class="form-inline" action="{{action('CategoryController@destroy', $category)}}" method="POST">
                    @csrf @method('DELETE')
                    <div class="btn-group" role="group" aria-label="Basic example">
                        <a class="btn btn-dark" href="/admin/categories/{{$category->id}}/edit">Edit</a>
                        <button class="btn btn-danger" type="submit">Delete</button>
                    </div>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
@endsection