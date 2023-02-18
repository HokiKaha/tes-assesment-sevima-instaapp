<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use App\Services\PostinganService;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class PostinganApiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): Response
    {
        $service = PostinganService::get();
        return response($service);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request): Response
    {
        $service = PostinganService::store($request->all());
        return response($service);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id): Response
    {
        $service = PostinganService::get($id);
        return response($service);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id): Response
    {
        $service = PostinganService::update($id, $request->all());
        return response($service);
    }

    /**
     * Take Down Postingan the specified resource from storage.
     */
    public function takeDown(string $id): Response
    {
        $service = PostinganService::takeDown($id);
        return response($service);
    }
}
