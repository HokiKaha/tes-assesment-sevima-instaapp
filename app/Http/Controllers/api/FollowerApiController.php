<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use App\Services\FollowerService;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class FollowerApiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function getFollower(string $postinganId): Response
    {
        $service = FollowerService::getFollower($postinganId);
        return response($service);
    }

    /**
     * Display a listing of the resource.
     */
    public function getFollowing(string $postinganId): Response
    {
        $service = FollowerService::getFollowing($postinganId);
        return response($service);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request): Response
    {
        $service = FollowerService::store($request->all());
        return response($service);
    }

    /**
     * destroy the specified resource from storage.
     */
    public function destroy(string $id): Response
    {
        $service = FollowerService::destroy($id);
        return response($service);
    }
}
