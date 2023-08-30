@extends('layouts.main')

@section('title', 'Add')

@section('main')

    <main>

        

        <div class="container text-center">
            <form method="POST" action="{{ route('students.update', $student) }}">
                @csrf
                @method('PUT')

                <div class="row justify-content-center">

                    {{-- Name --}}
                    <div class="mb-3 col-6">
                        <label class="text-start" for="name">Name</label>
                        <input type="text" id="name" name="name" class="form-control" autofocus
                            value="{{ $student->name}}">
                    </div>

                    {{-- Surname--}}
                    <div class="mb-3 col-6">
                        <label class="form-label" for="surname">Surname</label>
                        <input type="text" id="surname" name="surname" class="form-control"
                            value="{{ $student->surname}}">
                    </div>

                    

        </div>
    </main>

@endsection