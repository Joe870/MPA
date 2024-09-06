@extends('layouts.master')

@section("content")
    <div id="container">
        <h1>Song that belong to this genre</h1>
        <ul>
            <li><strong>genre Name:</strong> {{ $genres->name}}</li>
        </ul>
        <nav>
            <a href="index">back to the index page</a>
        </nav>
    </div>
@endsection
