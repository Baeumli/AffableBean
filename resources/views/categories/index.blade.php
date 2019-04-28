@extends('layouts.app') 
@section('content')

<h1>Categories</h1>
@if ($categories->isNotEmpty()) @foreach ($categories->chunk(2) as $chunk)
<div class="row">
    @foreach ($chunk as $category)
    <div class="col">
        <div class="card mb-4">
        <a href="/categories/{{$category->id}}">
                                <img src="{{asset('images/categories/' . $category->image)}}" onerror="this.src='images/404.svg'" alt="" class="card-img-top">
                            </a>
            <div class="card-body">
                <h5 class="card-title">{{$category->name}}</h5>
            </div>
        </div>
    </div>
    @endforeach
</div>
@endforeach @endif
@endsection