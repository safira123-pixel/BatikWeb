<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class product extends Model
{
    use HasFactory;
    protected $dates = ['deleted_at'];
    protected $fillable = [
        'kategori_id',
        'nama_barang',
        'foto',
        'keterangan',
        'stok',
        'harga',
    ];

    public function category() {
        return $this->belongsTo(Category::class);
    }

    public function order_product()
    {
        return $this->belongsTo(Order_Product::class);
    }

}
