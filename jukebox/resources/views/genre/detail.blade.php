@extends('layouts.master')

@section("content")
    <div id="container">
        <h1>Song(s) that belong to this genre</h1>
        <h2>{{$genre->name}} :</h2>
        <ul>
            @foreach($genre->songs as $song)
                <a href="{{ route('song.detail', $song->id) }}">Song Name: {{ $song->songName}}<a>
            @endforeach
        </ul>
    </div>
@endsection
