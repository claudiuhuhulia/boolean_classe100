<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    @vite('resources/js/app.js')
</head>

<body>

    <header>

        <nav class="navbar navbar-expand-lg bg-dark " data-bs-theme="dark">
            <div class="container">
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                    <div class="navbar-nav">
                        <a class="nav-link @if (Route::is('home')) active @endif" aria-current="page"
                            href="{{ route('home') }}">Home</a>
                        <a class="nav-link @if (Route::is('students.index')) active @endif" aria-current="page"
                            href="{{ route('students.index') }}">Lista
                            studenti</a>
                    </div>
                </div>
                <a href="{{ route('students.create') }}" class="btn btn-success">Aggiungi Studente</a>
            </div>
        </nav>

    </header>

    <main>
        @yield('main')
    </main>
</body>

</html>
