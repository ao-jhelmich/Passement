@extends('layouts.app')

@section('content')
    <h1>Welkomst pagina</h1>
    <div id="carouselExampleControls" class="carousel slide mb-5" data-ride="carousel">
        <div class="carousel-inner" style="height: 400px;">
            <div class="carousel-item active">
                <img src="https://placehold.it/800X500" width="100px" class="d-block w-100">
            </div>
            <div class="carousel-item">
                <img src="https://placehold.it/800X500" width="100px" class="d-block w-100">
            </div>
            <div class="carousel-item">
                <img src="https://placehold.it/800X500" width="100px" class="d-block w-100">
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

    <div class="row">
        <div class="col-5 card">
            <img src="https://placehold.it/800X500" class="card-img-top w-100" alt="...">

            <div class="card-body">
                <h5 class="card-title">Laatst toegevoegde album</h5>
                
                <a href="#" class="btn btn-primary">Bekijk album</a>
            </div>
        </div>

        <div class="col-5 offset-2 card">
            <div class="card-body">
                <h5 class="card-title">Top 10:</h5>

                <ul class="nav nav-tabs" id="myTab" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Artiesten</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Albums</a>
                    </li>
                </ul>
                    
                <div class="tab-content">
                    <div class="tab-pane active" id="home" role="tabpanel" aria-labelledby="home-tab">
                        <ol class="list-group">
                            <li class="list-group-item">1. Cras justo odio</li>
                            <li class="list-group-item">2. Dapibus ac facilisis in</li>
                            <li class="list-group-item">2. Morbi leo risus</li>
                            <li class="list-group-item">2. Porta ac consectetur ac</li>
                            <li class="list-group-item">2. Vestibolum at eros</li>
                        </ol>
                    </div>

                    <div class="tab-pane" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                        <ol class="list-group">
                            <li class="list-group-item">1. Albums</li>
                            <li class="list-group-item">2. Dapibus ac facilisis in</li>
                            <li class="list-group-item">2. Morbi leo risus</li>
                            <li class="list-group-item">2. Porta ac consectetur ac</li>
                            <li class="list-group-item">2. Vestibolum at eros</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection