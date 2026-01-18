@extends('Layout.master')

@section('content')
    <h1>Welcome to About Page</h1>
    <div class="card">
        <div class="card-body">
            <h5 class="card-title">Name: {{ $name }}</h5>
            <p class="card-text">Age: {{ $age }}</p>
            <p class="card-text">Address: {{ $address }}</p>
    </div>
@endsection