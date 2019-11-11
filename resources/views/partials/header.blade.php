<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav justify-content-between w-100">
            <li class="nav-item">
                <a class="nav-link {{ route_is('/') ? 'active' : '' }}" href="/">Home</a>
            </li>

            <li class="nav-item">
                <a class="nav-link {{ route_is('/admin') ? 'active' : '' }}" href="/admin">Admin</a>
            </li>

            @if(\App\Services\Auth::isLoggedIn())
                <li class="nav-item">
                    <a class="nav-link {{ route_is('/logout') ? 'active' : '' }}" href="/logout">logout</a>
                </li>
            @endif
        </ul>
    </div>
</nav>