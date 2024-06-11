@extends('layouts.master')

@section("content")
    <h1>Dit is de songpagina</h1>
    <ul>
        @foreach ($playlist as $playlists)
            <li>playlist name: {{$playlists -> name}}</li>
        @endforeach
    </ul>
@endsection

