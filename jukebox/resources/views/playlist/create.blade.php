@extends("layouts.master")

@section("content")
<form action="/playlist/store" method="POST">
    @csrf
    <label for="name">Vul hier de playlist titel in:</label>
    <input type="text" name="name">
    @error("name")
        {{$message}}
    @enderror
    <input type="submit">
    <nav>
        <a href="index">back to the index page</a>
    </nav>
</form>
@endsection