@extends('layouts.app')

@section('content')
<div class="container">
    <h1>AffableBean</h1>

    @if ($categories != null)
        @foreach ($categories as $category)
            {{$category->name}}
        @endforeach
    @endif
</div>
@endsection
