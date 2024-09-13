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
    public function detail($genres_id)
    {
        $genre = Genres::with('songs')->findOrFail($genres_id);
        //select vanuit song waar genre id gelijk is aan geselecteerd genre
        //dd($genres);
        return view('genre.detail', ['genre' => $genre]);
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
