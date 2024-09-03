@extends('layouts.master')

@section("content")
    <div id="container">
        <h1>Song Details</h1>
        <ul>
            <li><strong>Song Name:</strong> {{ $song->songName }}</li>
            <li><strong>Duration length:</strong> {{ $song->durationLength }}</li>
            <li><strong>Genre Id:</strong> {{ $song->genre_id }}</li>
            <li><strong>Artist name:</strong> {{ $song->artist_name }}</li>
        </ul>
        <nav>
            <a href="{{ route('song.show', $song->id) }}">add song to playlist</a>
            <a href="index">back to the index page</a>
        </nav>
    </div>
@endsection

@push('js')
    <script>
    </script>
@endpush