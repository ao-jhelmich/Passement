@extends('layouts.app')

@section('content')
    <h3>{{ $album->name }}</h3>

    <div class="card">
        <img src="{{ $album->img_link }}" class="card-img-top">
        
        <div class="card-body">
            <h5 class="card-title">Genres:</h5>

            <ul>
                @foreach ($album->getGenres() as $genre)
                    <li>{{ $genre->name }}</li>
                @endforeach
            </ul>

            <a href="/artist/{{ $album->artist_id }}" class="btn btn-primary">Check artist</a>
        </div>
    </div>
@endsection