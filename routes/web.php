<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\generateHash;
use App\Http\Controllers\getUser;
use App\Http\Controllers\Post;
use App\Http\Controllers\Comment;
use App\Http\Controllers\postList;
use App\Http\Controllers\search;
use App\Http\Controllers\getFiles;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

Route::get('/profil', function () {
    return view('profil');
})->middleware(['auth'])->name('profil');

Route::get('/authors', function () {
    return view('authors');
})->middleware(['auth'])->name('authors');

Route::get('/newpost', function () {
    return view('newpost');
})->middleware(['auth'])->name('newpost');

Route::post('/newpost',[Post::class,'create'])->middleware(['auth']);

Route::post('/postview/{ID}',[Comment::class,'create'])->middleware(['auth']);

Route::post('/commentedit/{ID}',[Comment::class,'update'])->middleware(['auth']);

Route::post('/postedit/{ID}',[Post::class,'update'])->middleware(['auth']);

Route::get('/dashboard',[postList::class,'postList'])->middleware(['auth'])->name('dashboard');

Route::get('/hash/{password}', [generateHash::class,"generate"]);

Route::get('/user/{id}', [getUser::class,"get"]);

Route::post('/profil',[getUser::class,'Valid'])->middleware(['auth']);

Route::get('/postview/{ID}',[postList::class,'oneViewed']);

Route::get('/commentedit/{ID}',[Comment::class,'display']);

Route::get('/postedit/{ID}',[Post::class,'display']);

Route::get('/storage/{fileName}',[getFiles::class,'getFileByName']);

Route::get('/storageID/{fileID}',[getFiles::class,'getFileByID']);

Route::get('/search',[search::class,'searchSwitch'])->middleware(['auth'])->name('search');

Route::get("/api/pieceofusers",[getUser::class,"pieceOfUsers"]);

require __DIR__.'/auth.php';
