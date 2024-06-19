@extends('layouts.master')

@section("content")
    <h1>Dit is de genrepagina</h1>
    <ul>
        @foreach ($genres as $genre)
            <li>{{$genre -> name}}</li>
            <button type="button">liedjes die bij dit genre horen</button>
            <li class="song-item" data-genre-id="{{ $songs->genre_id }}">song name: {{$songs->songName}}</li>
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
        document.addEventListener("DOMContentLoaded", function(){
            var allsongs = @json($song);
            genre_check = prompt("vul een genreId in");
            var container = document.getElementById('container');
            var songlist = document.getElementById()
            songlist.innerHTM = ""
            allsongs.forEach(function(allsongs){
                if (song.genre_id == genre_check) {
                    var line = document.createElement("li");
                    line.textContent = 'song name: ' + song.songName + ' ';
                    for(var key in song) {
                        if(song.hasOwnProperty(key) && key !== 'songName') {
                            line.textContent += key + ": " + song[key] + " ";
                        }
                    }
                }
            songlist.appendChild(line);
        });
    });
</script>
@endpush