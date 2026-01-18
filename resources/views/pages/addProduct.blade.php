@extends('Layout.master')

@section('content')
    <h1>Add Product here</h1>
    <form class="lable">
        <div class="mb-3">
            <label for="productName" class="form-label">Product Name</label>
            <input type="text" class="form-control" id="productName" aria-describedby="productHelp">
            <div id="productHelp" class="form-text">Enter the name of the product.</div>
        </div>
@endsection