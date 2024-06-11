<?php

use App\Http\Controllers\GenresController;
use App\Http\Controllers\SongController;
use App\Http\Controllers\PlaylistController;
use App\Http\Controllers\Welcome;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/hello', [Welcome::class, "hello"]);

Route::get('/genre/genre_index', [GenresController::class, "index"]);
Route::get('/genre/create', [GenresController::class, "create"]);
Route::post('/genre/store', [GenresController::class, "store"])->name("genre.store");

Route::get('/song/create', [SongController::class, "create"]);
Route::post('/song/store', [SongController::class, "store"])->name("song.store");
Route::get('/song/index', [SongController::class, "index"]);

Route::get('/playlist/index', [PlaylistController::class, "index"]);
Route::get('/playlist/create', [PlaylistController::class, "create"]);
Route::post('/playlist/store', [PlaylistController::class, "store"]) ->name("playlist.store");