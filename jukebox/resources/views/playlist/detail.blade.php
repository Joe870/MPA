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
    <nav>
        <a href="index">back to the index page</a>
    </nav>

@endsection
