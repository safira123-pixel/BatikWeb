<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class barang extends Model
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

    public function kategori() {
        return $this->belongsTo('App\Models\Kategori', 'kategori_id');
    }

}
