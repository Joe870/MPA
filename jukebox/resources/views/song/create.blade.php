@extends("layouts.master")

@section("content")
<form action="/song/store" method="POST">
    @csrf
    <label for="name">Vul hier de song titel in:</label>
    <input type="text" name="songName">
    @error("songName")
        {{$message}}
    @enderror
    <label for="duration">Vul hier de lengte van je liedje in:</label>
    <input type="text" name="durationLength">
    @error("duration")
        {{$message}}
    @enderror
    <label for="genre_id">vul hier het genre_id in:</label>
    <input type="text" name="genre_id">
    @error("genre_id")
        {{$message}}
    @enderror
    <label for="artist_name">vul hier de naam van de artiest in:</label>
    <input type="text" name="artist_name">
    @error("artist_name")
        {{$message}}
    @enderror
    <input type="submit">
    <nav>
        <a href="index">create a new song</a>
    </nav>
</form>
@endsection