<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Like;
/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/commentLikes/{ID}',[Like::class,"getCommentLikes"]);
Route::get('/postLikes/{ID}',[Like::class,"getPostLikes"]);

Route::middleware('auth:api')->get('/likeComment/{ID}',[Like::class,"switchCommentLike"]);
Route::middleware('auth:api')->get('/likePost/{ID}',[Like::class,"switchPostLike"]);

