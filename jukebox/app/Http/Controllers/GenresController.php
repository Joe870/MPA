<?php

namespace App\Http\Controllers;

use App\Models\Genres;
use Illuminate\Http\Request;

class GenresController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $genres = Genres::all();
        return view("genre.genreIndex", ["genres" => $genres]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function detail(Genres $genres)
    {
        // return view("genre.detail", ["genre" => $genres]);
        $genres = Genres::with('songs')->get();
        return view('genre.detail', compact('genres'));
        // return view("genre.detail", ["genres" => $genres, "songs" => $songs]);
    }

    public function create()
    {
        return view("genre.create");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request ->validate([
            "genreName" => "unique:genres,name|required|min:2"
        ]);
        Genres::create(["name" => $request->genreName]); 
    }

    /**
     * Display the specified resource.
     */
    public function show(Genres $genres)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Genres $genres)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Genres $genres)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Genres $genres)
    {
        //
    }
}
