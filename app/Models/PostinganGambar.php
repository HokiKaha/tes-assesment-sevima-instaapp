<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PostinganGambar extends Model
{
    use HasFactory;

    protected $fillable = [
        'postingan_id',
        'gambar'
    ];
}
