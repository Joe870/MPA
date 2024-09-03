@extends('layouts.master')

@section("content")
    <h1>Hier zie je de playlist van {{Auth::user()->name}}</h1>
    <ul>
        @foreach ($playlist as $playlists)
            <li>playlist name: {{$playlists -> name}}</li>
            <!-- <li>{{$playlists->songs}}</li> -->
            @foreach ($playlists->songs as $songdetails)
                <li>name song: {{$songdetails -> songName}}
            @endforeach

        @endforeach
    </ul>
    <nav>
        <a href="create">create a new playlist</a>
        <a href="show">edit playlist</a>
    </nav>
@endsection

