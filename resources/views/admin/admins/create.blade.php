@extends('layouts.app')

@section('content')
    
    <div class="container">
        <h1>Create Category</h1>
    
    <form action="{{action('CategoryController@store') }}" method="post">
        @csrf
            <div class="form-group">
                <label for="name">Name:</label>
                <input class="form-control" type="text" name="name">
                <label for="image">Image:</label>
                <input class="form-control" type="text" name="image">
            </div>
    
            <div class="form-group">
                <button class="btn btn-primary" type="submit">Submit</button>
            </div>
         
    </form>
</div>  
@endsection