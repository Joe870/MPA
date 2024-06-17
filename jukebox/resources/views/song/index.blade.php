@extends('layouts.master')

@section("content")
    <div id="container">
        <h1>Dit is de songpagina</h1>
        <ul>
            @foreach ($song as $songs)
                <li>song name: {{$songs -> songName}}</li>
                <!-- <button type="button" id="detailknop">klik hier voor songdetails</button> -->
            @endforeach
        </ul>
        <nav>
            <a href="create">back to the create page</a>
        </nav>
    </div>
@endsection

@push('js')
    <script>
        document.addEventListener("DOMContentLoaded", function(){
            var allsongs = @json($song);
            genre_check = prompt("vul een genreId in");
            var container = document.getElementById('container');
            allsongs.forEach(function(allsongs){
                var line = document.createElement("p");
                for(key in allsongs){
                    if(allsongs.hasOwnProperty(key)){
                        line.textContent += key + " : " + allsongs[key] + " ";
                    }
                }
            container.appendChild(line);
        });
    });
    </script>
@endpush
