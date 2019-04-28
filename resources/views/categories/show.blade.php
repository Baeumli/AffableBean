@extends('layouts.app') 
@section('content')
<div class="row justify-content-center">
    <div class="col-md-4">
        <div class="list-group">
            @foreach ($categories as $global_category)
            <a href="/categories/{{$global_category->id}}" class="list-group-item list-group-item-action">
                <h3>{{$global_category->name}}</h3>
            </a> @endforeach
        </div>
    </div>
    <div class="col-md-8">
        <h1>{{$category->name}}</h1>
        @if (!empty($category->products)) @foreach ($category->products->chunk(4) as $chunk)
        <div class="row">
            <table class="table">
                <tbody>
                    @foreach ($chunk as $product)
                    <tr>
                        <td class="align-middle"><img src="{{asset('images/products/' . $product->image)}}" onerror="this.src='images/404.svg'" alt=""
                                class="card-img-top">
                        </td>
                        <td class="align-middle">
                            <p class="text-center">{{$product->name}} <br> {{$product->description}}</p>
                        </td>
                        <td class="align-middle">
                            <p>&euro; {{$product->price}}</p>
                        </td>
                        <td class="align-middle">
                            @if ($product->in_stock > 0 )
                            <a href="">Add to cart</a> @else
                            <p class="text-danger">Out of Stock</p>
                            @endif
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        @endforeach @endif
    </div>
</div>
@endsection