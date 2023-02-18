<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use App\Services\KomentarService;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class KomentarApiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): Response
    {
        $service = KomentarService::get();
        return response($service);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request): Response
    {
        $service = KomentarService::store($request->all());
        return response($service);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id): Response
    {
        $service = KomentarService::update($id, $request->all());
        return response($service);
    }

    /**
     * Take Down Postingan the specified resource from storage.
     */
    public function destroy(string $id): Response
    {
        $service = KomentarService::destroy($id);
        return response($service);
    }
}
