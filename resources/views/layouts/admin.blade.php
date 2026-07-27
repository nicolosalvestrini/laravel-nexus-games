<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title', 'Nexus Games') - Admin</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark ng-navbar">
        <div class="container">
            <a class="navbar-brand fw-bold" href="{{ route('videogiochi.index') }}">🎮 NEXUS GAMES</a>

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarAdmin">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarAdmin">
                <ul class="navbar-nav me-auto">
                    <li class="nav-item">
                        <a class="nav-link {{ request()->routeIs('videogiochi.*') ? 'active' : '' }}" href="{{ route('videogiochi.index') }}">Videogiochi</a>
                    </li>
                    @if (Route::has('generi.index'))
                    <li class="nav-item">
                        <a class="nav-link {{ request()->routeIs('generi.*') ? 'active' : '' }}" href="{{ route('generi.index') }}">Generi</a>
                    </li>
                    @endif
                    @if (Route::has('piattaforme.index'))
                    <li class="nav-item">
                        <a class="nav-link {{ request()->routeIs('piattaforme.*') ? 'active' : '' }}" href="{{ route('piattaforme.index') }}">Piattaforme</a>
                    </li>
                    @endif
                </ul>

                <ul class="navbar-nav align-items-lg-center">
                    <li class="nav-item text-white-50 small me-lg-3">
                        {{ auth()->user()->name }}
                    </li>
                    <li class="nav-item">
                        <form method="POST" action="{{ route('logout') }}">
                            @csrf
                            <button type="submit" class="btn btn-sm btn-outline-light">Esci</button>
                        </form>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <main class="container py-4">
        @if (session('status'))
        <div class="alert alert-success">{{ session('status') }}</div>
        @endif

        @yield('content')
    </main>
</body>

</html>