@extends('layouts.app') 
@section('content')
<h1>Thank you for your Purchase</h1>
<p>Your confirmation number is: {{$order->confirmation_number}}</p>
@endsection