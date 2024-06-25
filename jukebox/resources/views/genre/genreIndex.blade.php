@extends('layouts.master')

@section("content")
    <h1>Dit is de genrepagina</h1>
    <ul>
        @foreach ($genres as $genre)
            <li>{{$genre -> name}}</li>
            <button type="button">liedjes die bij dit genre horen</button>
        @endforeach 
    </ul>
    <nav>
        <a href="create">create a new genre</a>
    </nav>
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
<script>
</script>
@endpush