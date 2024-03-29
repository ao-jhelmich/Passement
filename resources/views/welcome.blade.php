@extends('layouts.app')

@section('content')
    <h1>Latest albums</h1>
    
    <div id="carouselExampleControls" class="carousel slide mb-5" data-ride="carousel">
        <div class="carousel-inner" style="height: 400px;">
            @foreach ($albums as $album)
                <div class="carousel-item {{ $loop->first ? 'active' : '' }}">
                    <img src="{{ $album->img_link }}" class="d-block" style="height: 400px; width: 100%;" alt="Album cover of {{ $album->name }}">
                </div>
            @endforeach
        </div>
        
        <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>

        <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>

    <div class="row">
        <div class="card mr-auto col-md-4">
            <img src="{{ $welcome_album->img_link }}" class="card-img-top" alt="...">

            <div class="card-body">
                <h5 class="card-title">{{ $welcome_album->name }}</h5>
                
                <a href="/album/{{ $welcome_album->id }}" class="btn btn-primary">Show album</a>
            </div>
        </div>

        <div class="col-md-5 card">
            <div class="card-body">
                <h5 class="card-title">Top 10:</h5>

                <ul class="nav nav-tabs" id="myTab" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Artists</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Albums</a>
                    </li>
                </ul>
                    
                <div class="tab-content">
                    <div class="tab-pane active" id="home" role="tabpanel" aria-labelledby="home-tab">
                        <ol class="list-group">
                            @foreach ($artists as $artist)
                                <li>
                                    <a href="/artist/{{ $artist->id }}" class="list-group-item list-group-item-action">{{ $artist->name }}</a>
                                </li>
                            @endforeach
                        </ol>
                    </div>

                    <div class="tab-pane" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                        <ol class="list-group">
                            @foreach ($albums as $album)
                                <li>
                                    <a href="/album/{{ $album->id }}" class="list-group-item list-group-item-action">{{ $album->name }}</a>
                                </li>
                            @endforeach    
                        </ol>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection