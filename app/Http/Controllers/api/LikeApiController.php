<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use App\Services\LikeService;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class LikeApiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(string $postinganId): Response
    {
        $service = LikeService::get($postinganId);
        return response($service);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request): Response
    {
        $service = LikeService::store($request->all());
        return response($service);
    }

    /**
     * Take Down Postingan the specified resource from storage.
     */
    public function destroy(string $id): Response
    {
        $service = LikeService::destroy($id);
        return response($service);
    }
}
