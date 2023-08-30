@extends('layouts.main')

@section('main')
    <div class="container my-5">

        {{-- CARD --}}
        <div class="card border border-dark rounded-0">
            {{-- CARD HEADER --}}
            <div class="card-header d-flex justify-content-between align-items-center">
                <h1 class="card-title">Dettagli Studente - {{ $student->name }} {{ $student->surname }}</h1>
                <a class="btn btn-primary" href="{{ route('students.edit', $student->id) }}">Modifica</a>
            </div>

            {{-- CARD BODY --}}
            <div class="card-body d-flex my-3">
                <p class="card-text mb-0"><strong>Nome:</strong> {{ $student->name }}</p>
                <p class="card-text mx-3 mb-0"><strong>Cognome:</strong> {{ $student->surname }}</p>
            </div>

        </div>

    </div>
@endsection
