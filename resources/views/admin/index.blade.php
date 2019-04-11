@extends('layouts.app')

@section('content')
<div class="container">
    <h1>AffableBean Admin</h1>
    <a class="btn btn-primary" href="/admin/categories">Manage Categories</a>
    <a class="btn btn-primary" href="/admin/products">Manage Products</a>
    <a class="btn btn-primary" href="/admin/users">Manage Customers</a>
    <a class="btn btn-primary" href="/admin/admins">Manage Admins</a>
</div>
@endsection
