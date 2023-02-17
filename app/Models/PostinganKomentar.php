<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PostinganKomentar extends Model
{
    use HasFactory;

    protected $fillable = [
        'postingan_id',
        'komentar_id',
        'user_id',
        'komentar'
    ];
}
