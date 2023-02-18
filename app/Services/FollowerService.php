<?php

namespace App\Services;

use App\Repositories\FollowerRepository;

class FollowerService
{
    public static function getFollower($id)
    {
        return [
            'data' => FollowerRepository::getFollower($id)
        ];
    }

    public static function getFollowing($id)
    {
        return [
            'data' => FollowerRepository::getFollowing($id)
        ];
    }

    public static function store($input)
    {
        $inserted = FollowerRepository::create($input);
        return [
            'data' => $inserted
        ];
    }

    public static function destroy($id)
    {
        $deleted = FollowerRepository::destroy($id);
        return [
            'data' => $deleted
        ];
    }
}
