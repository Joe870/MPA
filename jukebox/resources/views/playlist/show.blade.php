@extends("layouts.master")

@section("content")
    <h1>{{$playlist->name}}</h1>
    @foreach($playlist->songs as $song)
        - {{$song -> name}}
        <br>
    @endforeach

    <form action="/playlist/addsong/{{$playlist->id}}" method="POST">
        @csrf
        <select name="selectedSong">
            @foreach($songs as $song)
                <option value="{{$song->id}}">{{$song->songName}}</option>
            @endforeach
        </select>
        <input type="submit" value="Send me!">
    </form>
@endsection