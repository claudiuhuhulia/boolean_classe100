@extends('layouts.main')


@section('main')
    <header>
        <nav class="navbar navbar-expand-lg bg-dark " data-bs-theme="dark">
            <div class="container">
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup"
                    aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                    <div class="navbar-nav">
                        <a class="nav-link active" aria-current="page" href="{{ route('home') }}">Home</a>
                        <a class="nav-link active" aria-current="page" href="{{ route('students.index') }}">Lista
                            studenti</a>

                    </div>
                </div>
            </div>
        </nav>
    </header>
@endsection
