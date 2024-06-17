@extends('layouts.master')

@section("content")
    <h1>Dit is de playlistpagina</h1>
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
    </nav>
@endsection

