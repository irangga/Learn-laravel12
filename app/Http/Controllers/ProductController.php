<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function getProduct()
    {
        $data_toko = [
            'name' => 'Toko Serba Ada',
            'location' => 'Jl. Sudirman No. 45',
            'owner' => 'Rangga Awan Ibrahim'
        ];
        return view('pages.product', compact('data_toko'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function addProduct(Request $request)
    {
        return view('pages.addProduct');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
