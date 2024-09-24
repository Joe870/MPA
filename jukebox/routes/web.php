<?php

use App\Http\Controllers\GenresController;
use App\Http\Controllers\SongController;
use App\Http\Controllers\PlaylistController;
use App\Http\Controllers\Welcome;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

Route::get('/', function () {
    return view('welcome');
});

Route::get('/hello', [Welcome::class, "hello"]);

Route::get('/genre/genreIndex', [GenresController::class, "index"]);
Route::get('/genre/create', [GenresController::class, "create"]);
Route::post('/genre/store', [GenresController::class, "store"])->name("genre.store");
Route::get('/genre/detail/{genres_id}', [GenresController::class, "detail"])->name("genre.detail");

Route::get('/song/create', [SongController::class, "create"]);
Route::post('/song/store', [SongController::class, "store"])->name("song.store");
Route::get('/song/index', [SongController::class, "index"]);
Route::get('/song/show/{song}', [SongController::class, "show"])->name("song.show");
Route::post('/song/addplaylist/{song}', [SongController::class, "addPlaylistToSong"]);
Route::get('/song/{id}', [SongController::class, "detail"])->name("song.detail");
Route::get('/song/addtotemplaylist/{song}', [SongController::class, "addtotemplaylist"])->name("addtotemplaylist");

Route::get('/playlist/index', [PlaylistController::class, "index"])->name('playlist.index');
Route::get('/playlist/create', [PlaylistController::class, "create"]);
Route::post('/playlist/store', [PlaylistController::class, "store"]) ->name("playlist.store");
Route::get('/playlist/show/{playlist}', [PlaylistController::class, "show"]);
Route::post('/playlist/addsong/{playlist}', [PlaylistController::class, "addSongToPlaylist"]);
Route::get('/playlist/detail/{playlist}', [PlaylistController::class, "detail"]) ->name("playlist.detail");
Route::get('/playlist/edit/{playlist}', [PlaylistController::class, "edit"]) ->name("playlist.edit");
Route::put('/playlist/{id}', [PlaylistController::class, 'update'])->name('playlist.update');
Route::post('/playlist/deletesong/{playlist}', [PlaylistController::class, "deleteSongFromPlaylist"]);
