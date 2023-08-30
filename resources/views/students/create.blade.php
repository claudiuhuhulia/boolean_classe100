@extends('layouts.main')

@section('main')
    <div class="container text-center">


        <form method="POST" action="{{ route('students.store') }}">

            {{-- Token --}}
            @csrf

            <div class="row justify-content-center">
                <h1 class="mb-3">Aggiungi Studente</h1>

                {{-- Nome Studente --}}
                <div class="mb-3 col-6">
                    <label class="text-start" for="name">Nome</label>
                    <input type="text" id="name" name="name" class="form-control" value="{{ old('name') }}"
                        autofocus>
                </div>

                {{-- Cognome Studente --}}
                <div class="mb-3 col-6">
                    <label class="form-label" for="surname">Cognome</label>
                    <input type="text" id="surname" name="surname" class="form-control" value="{{ old('surname') }}">
                </div>

            </div>
            <button class="btn btn-success">Aggiungi Studente</button>
        </form>

    </div>
@endsection
