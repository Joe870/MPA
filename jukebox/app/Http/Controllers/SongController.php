<?php

namespace App\Http\Controllers;

use App\Models\playlist;
use App\Models\Song;
use Illuminate\Http\Request;

class SongController extends Controller
{
    public function index()
    {
        $song = Song::with('playlists')->get();
        $playlists = playlist::all();
        return view("song.index", ["songs" => $song,"playlists" => $playlists]);
    }

    public function detail($id)
    {
        $song = Song::findOrFail($id);
        return view('song.detail', compact('song'));
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
            "genres_id" => "required|integer|min:1",
            "artist_name" => "required|string"
        ]);
        Song::create(["songName" => $request->songName,"durationLength" =>$request->durationLength, "genres_id" =>$request->genres_id, "artist_name" => $request->artist_name]); 
    }

    /**
     * Display the specified resource.
     */
    public function show(Song $song)
    {
        $playlists = playlist::all();
        return view('song.show', compact('song', 'playlists'));
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
        $playlistId = $request->input("selectedPlaylist");
        $playlist = Playlist::findOrFail($playlistId);
        $playlist->songs()->attach($song->id);
        return redirect()->back()->with('succes', 'Song added to playlist');
    }
}
