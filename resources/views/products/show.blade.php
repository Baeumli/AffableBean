@extends('layouts.app')

@section('content')
    <h1>{{$product->name}}</h1>
    <div class="row justify-content-center">
        <div class="col-8">
                <p>Category: {{$product->category->name}}</p>
                <p>Price: {{$product->price}}</p>
                <p>Description: {{$product->description}}</p>
                <a href="#">Add to cart</a>
        </div>
        <div class="col-4">
                <div class="card">
                        <img src="{{asset('images/products/' . $product->image)}}" onerror="this.src='images/404.svg'" alt="" class="card-img-top">
                    </div>
        </div>
    </div>
@endsection

