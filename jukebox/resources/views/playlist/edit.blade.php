@extends("layouts.master")

@section("content")
    <form action="/playlist/update/{playlist}" method="POST">
        @csrf
        <h1>Edit {{ $playlist->name}}</h1>
        <label for="name">Verander hier de playlist naam:</label>
        <input type="text" name="name" value="{{ $playlist->name }}">
        @error("name")
            {{$message}}
        @enderror
        <input type="submit">
    </form>
@endsection