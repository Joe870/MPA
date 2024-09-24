@extends("layouts.master")

@section("content")
    <form action="{{ route('playlist.update', $playlist->id) }}" method="POST">
        @csrf
        @method('PUT')
        
        <h1>Edit {{ $playlist->name }}</h1>
        
        <label for="name">Verander hier de playlist naam:</label>
        <input type="text" name="name" value="{{ $playlist->name }}">
        
        @error("name")
            <div>{{ $message }}</div>
        @enderror

        <input type="submit" value="Update Playlist">
    </form>
@endsection