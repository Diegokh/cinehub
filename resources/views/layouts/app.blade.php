<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body class="d-flex flex-column min-vh-100">

    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container">
            <a class="navbar-brand" href="/">CineHub</a>

            <div class="navbar-nav ms-auto">
                <a class="nav-link" href="/movies">Películas</a>

                @auth
                    <a class="nav-link" href="{{ route('dashboard') }}">Dashboard</a>
                    <a class="nav-link" href="{{ route('profile.edit') }}">{{ Auth::user()->name }}</a>

                    <form method="POST" action="{{ route('logout') }}" class="d-inline">
                        @csrf
                        <button type="submit" class="nav-link btn btn-link">Salir</button>
                    </form>
                @else
                    <a class="nav-link" href="{{ route('login') }}">Login</a>
                    <a class="nav-link" href="{{ route('register') }}">Registro</a>
                @endauth
            </div>
        </div>
    </nav>

    <!-- Content -->
    <main class="container py-4 flex-grow-1">
        <button onclick="history.back()" class="btn btn-outline-secondary btn-sm mb-3">
            ← Atrás
        </button>

        @yield('content')
    </main>

    <!-- Footer -->
    <footer class="bg-dark text-white text-center py-3 mt-auto">
        <p class="mb-0">
            CineHub © {{ date('Y') }}
        </p>
    </footer>

</body>
</html>
