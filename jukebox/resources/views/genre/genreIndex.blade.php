@extends('layouts.master')

@section("content")
    <h1>Dit is de songpagina</h1>
    <ul>
        @foreach ($genres as $genre)
            <li>{{$genre -> name}}</li>
            <button type="button">liedjes die bij dit genre horen</button>
        @endforeach 
    </ul>
@endsection

@push("styles")
    <style>
        h1{
            color:purple;
        }
        body{
            text-align:center;
        }
        button{
            border:solid 1px black;
        }
    </style>
@endpush
@push('js')
    <script> alert("Je bent nu op de song pagina")</script>
@endpush