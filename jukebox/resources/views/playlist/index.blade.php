@extends('layouts.master')

@section("content")
    <h1>Hier zie je de playlists van {{Auth::user()->name}}</h1>
    <ul>
        @foreach ($playlist as $playlists)
            <li>
                <a href="{{ route('playlist.detail', $playlists->id) }}">playlist name: {{$playlists -> name}}</a>
            </li>
        @endforeach
    </ul>
    <nav>
        <a href="create">create a new playlist</a>
    </nav>
@endsection

