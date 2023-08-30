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
                            <a class="btn btn-warning " href="{{ route('students.edit', $student) }}">Modifica</a>
                            <a class="btn btn-primary "
                                href="{{ route('students.show', ['student' => $student->id]) }}">Vedi</a>

                            <form class="deleteForm" action=" {{ route('students.destroy', $student->id) }} " method="POST"
                                data-name="{{ $student->name }}">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">Elimina</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
