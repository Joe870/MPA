@extends('layouts.master')

@section("content")
    <h1>Dit is de songpagina</h1>
    <ul>
        @foreach ($song as $songs)
            <li>song name: {{$songs -> songName}}</li>
            <li>song duration: {{$songs -> durationLength}} seconds</li>
        @endforeach
    </ul>
@endsection

@push('js')
    <script> alert("Je bent nu op de song pagina")</script>
@endpush
