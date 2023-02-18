<?php

namespace App\Repositories;

use App\Models\PostinganLike;

class LikeRepository
{
    public static function getByPostingan($posinganId)
    {
        return PostinganLike::where('postingan_id', $posinganId)->get();
    }

    public static function create($input)
    {
        return PostinganLike::create($input);
    }

    public static function destroy($id)
    {
        return PostinganLike::find($id)->delete();
    }
}
