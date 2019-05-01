@extends('layouts.admin')

@section('content')
    
    <div class="container">
        <h1>Create Category</h1>
    
    <form action="{{action('CategoryController@store') }}" method="post" enctype="multipart/form-data">
        @csrf
            <div class="form-group">
                <label for="name">Name:</label>
                <input class="form-control" type="text" name="name">
                <label for="image">Image:</label>
                <input class="form-control-file" type="file" name="image">
            </div>
    
            <div class="form-group">
                <button class="btn btn-success" type="submit">Submit</button>
            </div>
         
    </form>
</div>  
@endsection