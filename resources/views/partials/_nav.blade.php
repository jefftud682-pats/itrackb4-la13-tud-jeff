<nav class="navbar navbar-expand-lg bg-dark shadow-sm" data-bs-theme="dark">
    <div class="container">
        <a class="navbar-brand fw-bold" href="{{ route('home') }}">
            <i class="bi bi-stars text-warning me-1"></i>Movies
        </a>

        <button class="navbar-toggler" type="button"
                data-bs-toggle="collapse" data-bs-target="#mainNav"
                aria-controls="mainNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="mainNav">
            <ul class="navbar-nav me-auto">
                <li class="nav-item">
                    <a class="nav-link {{ request()->routeIs('home') ? 'active' : '' }}"
                       href="{{ route('home') }}">
                        <i class="bi bi-house me-1"></i>Home
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ request()->routeIs('movies.*') ? 'active' : '' }}"
                       href="{{ route('movies.index') }}">
                        <i class="bi bi-people me-1"></i>Movies
                    </a>
                </li>
            </ul>
        </div>
    </div>
</nav>