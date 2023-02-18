<?php

use App\Http\Controllers\api\FollowerApiController;
use App\Http\Controllers\api\KomentarApiController;
use App\Http\Controllers\api\LikeApiController;
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

Route::prefix('/komentar')->group(function() {
    Route::get('/{postingan_id}', [KomentarApiController::class, 'index']);
    Route::post('/', [KomentarApiController::class, 'store']);
    Route::patch('/{id}', [KomentarApiController::class, 'update']);
    Route::delete('/{id}', [KomentarApiController::class, 'destroy']);
});

Route::prefix('/like')->group(function() {
    Route::get('/{postingan_id}', [LikeApiController::class, 'index']);
    Route::post('/', [LikeApiController::class, 'store']);
    Route::delete('/{id}', [LikeApiController::class, 'destroy']);
});

Route::prefix('/follower')->group(function() {
    Route::get('/{user_id}', [FollowerApiController::class, 'getFollower']);
    Route::get('/following/{user_id}', [FollowerApiController::class, 'getFollowing']);
    Route::post('/', [FollowerApiController::class, 'store']);
    Route::delete('/{id}', [FollowerApiController::class, 'destroy']);
});
