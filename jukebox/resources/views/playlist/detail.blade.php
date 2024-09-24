@extends('layouts.master')

@section("content")
    <h1>{{$playlist->name}}</h1> 
    @foreach($playlist->songs as $song)
        - {{$song->songName}}
        <br>
    @endforeach
    <form action="/playlist/addsong/{{$playlist->id}}" method="POST">
        <p>add a song to the above listed playlist</p>
        @csrf 
        <select name="selectedSong">
            @foreach($songs as $song)
                <option value="{{$song->id}}">{{$song->songName}}</option>
            @endforeach 
        </select>
        <input type="submit" value="Send me!">
    </form>
    <p>Total Playtime: {{$totalplaylistduration}}</p>
    <nav>
        <a href="{{ route('playlist.edit', $playlist->id)}}">edit hier deze playlist</a>
    </nav>

@endsection
