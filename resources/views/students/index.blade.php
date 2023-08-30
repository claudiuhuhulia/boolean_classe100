@extends('layouts.main')

@section('main')
    <div class="container">
        <table class="table text-center">
            <thead>
                <tr>
                    <th scope="col">NOME</th>
                    <th scope="col">COGNOME</th>
                    <th scope="col" colspan="2">AZIONI</th>

                </tr>
            </thead>
            <tbody>
                @foreach ($students as $student)
                    <tr>
                        <td>{{ $student->name }}</td>
                        <td>{{ $student->surname }}</td>
                        <td class="d-flex justify-content-center">
                            <a class="btn btn-warning " href="#">Modifica</a>
                            <a class="btn btn-danger mx-2" href="#">Elimina</a>
                            <a class="btn btn-primary "
                                href="{{ route('students.show', ['student' => $student->id]) }}">Vedi</a>

                        </td>
                    </tr>
                @endforeach

            </tbody>
        </table>
    </div>
@endsection
