@extends('layouts.master')

@section("content")
    <h1>{{$playlist}}</h1> 
    <form action="/playlist/addsong/{{$playlist->id}}" method="POST">

        @csrf 
        <select name="selectedSong">
            @foreach($songs as $song)
                <option value="{{$song->id}}">{{$playlist->name}}</option>
            @endforeach 
        </select>
        <input type="submit" value="Send me!">
    </form>
    <nav>
        <a href="index">back to the index page</a>
    </nav>

@endsection
