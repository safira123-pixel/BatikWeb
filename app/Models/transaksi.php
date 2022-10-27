<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class transaksi extends Model
{
    protected $table = 'transaksi';
    protected $fillable = [
        'product_id',
        'user_id',
        'tanggal',
        'status',
        'kode',
        'jumlah',
        'harga',
    ];

    public function user()
    {
        return $this->belongsTo('App\Models\User', 'user_id');
    }

    public function barang()
    {
        return $this->belongsTo('App\Models\Product', 'product_id');
    }
}


