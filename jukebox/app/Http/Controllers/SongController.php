<?php

namespace App\Http\Controllers;

use App\Models\playlist;
use App\Models\Song;
use Illuminate\Http\Request;

class SongController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $song = Song::with('playlists')->get();
        $playlists = playlist::all();
        return view("song.index", ["songs" => $song,"playlists" => $playlists]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("song.create");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            "songName" => "required|string",
            "durationLength" => "required|integer|min:0",
            "genreId" => "required|integer|min:1",
            "artist_name" => "required|string"
        ]);
        Song::create(["songName" => $request->songName,"durationLength" =>$request->durationLength, "genreId" =>$request->genreId, "artist_name" => $request->artist_name]); 
    }

    /**
     * Display the specified resource.
     */
    public function show(Song $song)
    {
        $playlists = playlist::all();
        return view("song.show", ["song" => $song, "playlists" => $playlists]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Song $song)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Song $song)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Song $song)
    {
        //
    }

    public function addPlaylistToSong(Request $request, Song $song)
    {
        $playlist = $request->get("selectedPlaylist");
        $song->playlist()->attach($song);
        return redirect()->back();
    }
}
