<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Postingan extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'deskripsi'
    ];

    public function komentars()
    {
        return $this->hasMany(PostinganKomentar::class);
    }

    public function likes()
    {
        return $this->hasMany(PostinganLike::class);
    }
}
