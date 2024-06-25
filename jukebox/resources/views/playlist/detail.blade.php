@extends('layouts.master')

@section("content")
    <div id="container">
        <h1>Song Details</h1>
        <ul>
            <li><strong>Playlist Name:</strong> {{ $playlist->name }}</li>
        </ul>
        <nav>
            <a href="index">back to the index page</a>
        </nav>
    </div>
@endsection

@push('js')
    <script>
    </script>
@endpush