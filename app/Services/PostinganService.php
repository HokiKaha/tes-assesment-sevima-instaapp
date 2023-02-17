<?php

namespace App\Services;

use App\Repositories\PostinganRepository;

class PostinganService
{
    public static function get()
    {
        return [
            'data' => PostinganRepository::getAll()
        ];
    }

    public static function getShow($id)
    {
        return [
            'data' => PostinganRepository::detail($id)
        ];
    }

    public static function store($input)
    {
        $inserted = PostinganRepository::create($input);
        return [
            'data' => $inserted
        ];
    }

    public static function update($id, $input)
    {
        $inserted = PostinganRepository::update($id, $input);
        return [
            'data' => $inserted
        ];
    }

    public static function takeDown($id)
    {
        $deleted = PostinganRepository::delete($id);
        return [
            'data' => $deleted
        ];
    }
}
