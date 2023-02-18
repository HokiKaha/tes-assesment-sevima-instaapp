<?php

namespace App\Repositories;

use App\Models\Follower;

class FollowerRepository
{
    public static function getFollower($id)
    {
        return Follower::where('user_id', $id)->get();
    }

    public static function getFollowing($id)
    {
        return Follower::where('follower_user_id', $id)->get();
    }

    public static function create($input)
    {
        return Follower::create($input);
    }

    public static function destroy($id)
    {
        return Follower::find($id)->delete();
    }
}
