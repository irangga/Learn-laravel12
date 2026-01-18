<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    // inisialisasi tabel product
    protected $tavble = 'tb_product';

    // inisialisasi primary key
    protected $primaryKey = 'id_product';

    // inisialisasi kolom yang dapat diisi secara massal
    protected $fillable = [
        'name',
        'description',
        'price',
        'stock'
    ];

    // inisialisasi kolom yang tidak dapat diisi secara massal
    protected $guarded = [
        'id_product'
    ];
}
