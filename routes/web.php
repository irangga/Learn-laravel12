<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;

Route::get('/', function () {
    return view('pages.home');
});

Route::get('/about', function () {
    $data = [
        'name' => 'Rangga Awan Ibrahim',
        'age' => 17,
        'address' => 'Jl. Merdeka No. 123'
    ];
    return view('pages.about', $data);
});



Route::view('/contact', 'pages.contact');
Route::get('/product', [ProductController::class, 'getProduct']);
Route::get('/product/add', [ProductController::class, 'addProduct']);
