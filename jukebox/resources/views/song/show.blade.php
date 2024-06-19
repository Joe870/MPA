@extends("layouts.master")

@section("content")
    <h1>{{$song->name}}</h1>
    @foreach($song->playlists as $playlist)
        - {{$playlist -> name}}
        <br>
    @endforeach

    <form action="/playlist/addplaylist/{{$song->id}}" method="POST">
        @csrf
        <select name="selectedPlaylist">
            @foreach($playlists as $playlist)
                <option value="{{$playlist->id}}">{{$playlist->name}}</option>
            @endforeach
        </select>
        <input type="submit" value="Send me!">
    </form>
@endsection