<?php

use App\Http\Controllers\api\PostinganApiController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::prefix('/postingan')->group(function() {
    Route::get('/', [PostinganApiController::class, 'index']);
    Route::get('/{id}', [PostinganApiController::class, 'show']);
    Route::post('/', [PostinganApiController::class, 'store']);
    Route::patch('/{id}', [PostinganApiController::class, 'update']);
    Route::delete('/take-down/{id}', [PostinganApiController::class, 'takeDown']);
});
