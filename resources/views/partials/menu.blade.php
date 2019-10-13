<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav justify-content-between w-100">
            <li class="nav-item">
                <a class="nav-link {{ \App\Services\Route::is('/') ? 'active' : '' }}" href="/">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{ \App\Services\Route::is('/login') ? 'active' : '' }}" href="/login">Beheer</a>
            </li>
        </ul>
    </div>
</nav>