@extends('layouts.app')

@section('content')
    <h3>{{ $artist->name }}</h3>

    <div class="card">
        <div class="card-body">
            <h5 class="card-title">Albums from {{ $artist->name }}:</h5>

            <ul class="list-group">
                @foreach ($artist->getAlbums() as $album)
                    <a href="/album/{{ $album->id }}" class="list-group-item list-group-item-action">{{ $album->name }}</a>
                @endforeach
            </ul>
        </div>
    </div>
@endsection