@extends('layouts.admin') 
@section('content')
<h1>Administrator Dashboard</h1>
<div class="row justify-content-center mb-4">
    <div class="col-md-6">
        <a href="#">
            <div class="card text-white bg-dark">
                <div class="card-body">
                    <h5 class="card-title">Total Products</h5>
                    <p class="admin-card card-text">12</p>
                </div>
            </div>
        </a>
    </div>
    <div class="col-md-6">
        <a href="#">
            <div class="card text-white bg-dark">
                <div class="card-body">
                    <h5 class="card-title">Total Orders</h5>
                    <p class="admin-card card-text">85</p>
                </div>
            </div>
        </a>
    </div>
</div>
<div class="row justify-content-center">
    <div class="col-md-6">
        <a href="#">
            <div class="card text-white bg-dark">
                <div class="card-body">
                    <h5 class="card-title">Out of Stock</h5>
                    <p class="admin-card card-text">4</p>
                </div>
            </div>
        </a>
    </div>
    <div class="col-md-6">
        <a href="#">
            <div class="card text-white bg-dark">
                <div class="card-body">
                    <h5 class="card-title">Total Customers</h5>
                    <p class="admin-card card-text">103</p>
                </div>
            </div>
        </a>
    </div>
@endsection