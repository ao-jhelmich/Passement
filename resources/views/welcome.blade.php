@extends('layouts.app')

@section('content')
    <h1>Welkomst pagina</h1>
    <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="https://placehold.it/800X500" width="100px" height="400px"  class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="https://placehold.it/800X500" width="100px" height="400px"  class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="https://placehold.it/800X500" width="100px" height="400px"  class="d-block w-100" alt="...">
            </div>
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
@endsection