@extends('layouts.master')

@section("content")
    <div id="container">
        <h1>Dit is de songpagina</h1>

        <p>dit is de content van de sessie:</p>
        {{var_dump(session()->get("tempSongs"))}}
        <ul>
            @foreach ($songs as $song)
                <li>
                    <a href="{{ route('song.detail', $song->id) }}">Song Name: {{ $song->songName}}<a>
                    <a href="/song/addtotemplaylist/{{$song->id}}">Voeg toe aan tempory playlist</a>
                </li>
            @endforeach
        </ul>
        <a href="{{ route('turnTemptoPerm', $song->id) }}">Verander de tempory playlist in een permanent playlist (kan alleen als je bent ingelogt)</a>
        <nav>
            <a href="create">back to the create page</a>
        </nav>
    </div>
@endsection

@push('js')
    <script>
    </script>
@endpush
