@extends('layouts.master')

@section("content")
    <h1>Dit is de genrepagina</h1>

        @foreach ($genres as $genre)
            <li>
                <a href="{{ route('genre.detail', $genre->id) }}">genre Name: {{ $genre->name }}</a>
            </li>
        @endforeach

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