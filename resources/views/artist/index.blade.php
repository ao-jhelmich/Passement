@extends('layouts.app')

@section('content')
    <h3>{{ $artist->name }}</h3>

    <div class="card">
        <div class="card-body">
            <h5 class="card-title">Albums from {{ $artist->name }}:</h5>

            <ul>
                @foreach ($artist->getAlbums() as $album)
                    <li>
                        <a href="/album/{{ $album->id }}" class="btn btn-primary">{{ $album->name }}</a>
                    </li>
                @endforeach
            </ul>
        </div>
    </div>
@endsection