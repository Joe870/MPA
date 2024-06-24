@extends("layouts.master")

@section("content")
    <h1>{{$song->songName}}</h1>
    @foreach($song->playlists as $playlist)
        - {{$playlist -> name}}
        <br>
    @endforeach

    <form action="/playlist/addplaylist/{{$song->id}}" method="POST">
        @csrf
        <select name="selectedPlaylist">
            @foreach($playlists as $playlist)
                <p>add the above song to the selected playlist</p>
                <option value="{{$playlist->id}}">{{$playlist->name}}</option>
            @endforeach
        </select>
        <input type="submit" value="Send me!">
    </form>
@endsection