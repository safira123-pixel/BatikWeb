<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class feedback extends Model
{
    protected $dates = ['deleted_at'];
    protected $fillable = [
        'username',
        'rating',
        'isi_feedback',
    ];

    
}
