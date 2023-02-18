<?php

namespace App\Services;

use App\Repositories\LikeRepository;

class LikeService
{
    public static function get($posinganId)
    {
        return [
            'data' => LikeRepository::getByPostingan($posinganId)
        ];
    }

    public static function store($input)
    {
        $inserted = LikeRepository::create($input);
        return [
            'data' => $inserted
        ];
    }

    public static function destroy($id)
    {
        $deleted = LikeRepository::destroy($id);
        return [
            'data' => $deleted
        ];
    }
}
