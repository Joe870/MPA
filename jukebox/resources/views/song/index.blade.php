@extends('layouts.master')

@section("content")
    <div id="container">
        <h1>Dit is de songpagina</h1>
        <ul>
            @foreach ($songs as $song)
                <li>song name: {{$song -> songName}}</li>
                <!-- <button type="button" id="detailknop">klik hier voor songdetails</button> -->
            @endforeach
        </ul>
        <nav>
            <a href="create">back to the create page</a>
            <a href="show">add songs to playlist</a>
        </nav>
    </div>
@endsection

@push('js')
    <script>
    </script>
@endpush
