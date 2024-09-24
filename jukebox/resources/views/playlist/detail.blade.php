@extends('layouts.master')

@section("content")
    <h1>{{$playlist->name}}</h1> 
    @foreach($playlist->songs as $song)
        <a href="{{ route('song.detail', $song->id) }}">Song Name: {{ $song->songName}}<a>
        <form action="/playlist/deletesong/{{$playlist->id}}" method="POST">
            @csrf
            <select name="SelectedDeleteSong">
            <option value="{{$song->id}}">{{$song->songName}}</option>
            <input type="submit" value="delete me from playlist!">
            <br>
        </form>
    @endforeach
    <br>
    <form action="/playlist/addsong/{{$playlist->id}}" method="POST">
        <p>add a song to the above listed playlist</p>
        @csrf 
        <select name="selectedSong">
            @foreach($songs as $song)
                <option value="{{$song->id}}">{{$song->songName}}</option>
            @endforeach 
        </select>
        <input type="submit" value="add me to playlist!">
    </form>
    <p>Total Playtime: {{$totalplaylistduration}}</p>
    <nav>
        <a href="{{ route('playlist.edit', $playlist->id)}}">edit hier deze playlist</a>
    </nav>

@endsection
