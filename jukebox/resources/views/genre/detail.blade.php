@extends('layouts.master')

@section("content")
    <div id="container">
        <h1>Song(s) that belong to this genre</h1>
        <h2>{{$genres->genreName}} :</h2>
        <ul>
            @foreach ($genres->songs as $song)
                <li>{{$song->songName}}</li>
            @endforeach
        </ul>
    </div>
@endsection
