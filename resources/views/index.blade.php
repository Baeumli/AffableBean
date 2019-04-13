@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-4">
            Hey
        </div>
        <div class="col-8">
                <h1>AffableBean</h1>

                @if ($categories != null)
                    @foreach ($categories->chunk(2) as $chunk)
                        <div class="row">
                    
                     @if ($chunk->count() != 2)
                        <div class="my-4">
                     @else
                        <div class="col my-4">
                     @endif
                        
                            @foreach ($chunk as $category)
                                <div class="card" style="width: 18rem;">
                                    <img src="{{asset('images/categories/' . $category->image)}}" onerror="this.src='images/404.svg'" alt="" class="card-img-top">
                                    <div class="card-body">
                                        <a href="#" class="card-link">{{$category->name}}</a>
                                    </div>
                                </div>
                            @endforeach 
                        </div> 
                    </div>    
                    @endforeach
                @endif
            </div>
        </div>
    </div>
    
@endsection
