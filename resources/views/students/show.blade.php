@extends('layouts.main')

@section('main')
    <div class="container">
        <h1>Dettagli Studente</h1>

        <p><strong>Nome:</strong> {{ $student->name }}</p>
        <p><strong>Cognome:</strong> {{ $student->surname }}</p>
    </div>
@endsection
