@extends('layouts.master')

@section("content")
    <h1>Dit is de songpagina</h1>
    <p></p>
@endsection

@push("styles")
    <style>
        p{
            color:orange;
        }
        h1{
            color:purple;
        }
        body{
            text-align:center;
        }
    </style>
@endpush
@push('js')
    <script> alert("Je bent nu op de song pagina")</script>
@endpush
