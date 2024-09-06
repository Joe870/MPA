<?php

namespace App\Http\Controllers;

use App\Models\playlist;
use App\Models\Song;
use Illuminate\Http\Request;

class PlaylistController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $playlist = Playlist::with('songs')->get();
        $songs = Song::all();
        return view("playlist.index", compact("playlist", "songs"));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("playlist.create");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            "name" => "required|string"
        ]);

        Playlist::create(["name" => $request->name]);
    }

    /**
     * Display the specified resource.
     */
    public function detail(playlist $playlist)
    {
        $songs = Song::all();
        return view("playlist.show", ["playlist" => $playlist, "songs" => $songs]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(playlist $playlist)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, playlist $playlist)
    {
        //
    }

    /**
     * 
     * Remove the specified resource from storage.
     */
    public function destroy(playlist $playlist)
    {
        //
    }

    public function addSongToPlaylist(Request $request, Playlist $playlist)
    {
        $songId = $request->input("selectedSong");
        $song = Song::findOrFail($songId);
        $song->playlists()->attach($playlist->id);
        return redirect()->back()->with('success', 'Song added to playlist');
    }
}
