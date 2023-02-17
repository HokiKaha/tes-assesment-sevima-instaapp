<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PostinganLike extends Model
{
    use HasFactory;

    protected $fillable = [
        'postingan_id',
        'user_id'
    ];
}
