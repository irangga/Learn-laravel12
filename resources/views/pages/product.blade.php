@extends('Layout.master')

@section('content')
    <div class="container mx-auto">
        <h1 class="text-center">Product Us</h1>
        <hr>
        <a href="/product/add" type="button" class="btn btn-primary">add data</a>
        <div class="card">
            <div class="card-body">
                <h5 class="card-title">Our Products</h5>
                <p class="card-text">We offer a wide range of products to meet your needs. Explore our catalog to find the perfect items for you.</p>
                <div class="alert alert-primary">
                    <strong>Store Name:</strong> {{ $data_toko['name'] }} <br>
                    <strong>Location:</strong> {{ $data_toko['location'] }} <br>
                    <strong>Owner:</strong> {{ $data_toko['owner'] }}
                </div>
       
                <table class="table table-striped table-hover table-bordered mt-3">
                    <thead>
                        <tr>
                        <th scope="col">id</th>
                        <th scope="col">Name</th>
                        <th scope="col">amount</th>
                        <th scope="col">Price</th>
                        <th scope="col">Status</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th scope="row">1</th>
                            <td>Laptop ADVAN</td>
                            <td>50</td>
                            <td>5000000</td>
                            <td>
                                <button type="button" class="btn-warning">Edit</button>
                                <button type="button" class="btn-danger">Delete</button>
                            </td>
                        </tr>
                        
                    </tbody>
                    </table>   
            </div>
        </div>         
    </div>



    


@endsection