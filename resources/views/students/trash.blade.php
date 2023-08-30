@extends('layouts.main')

@section('main')
    <div class="container">
        <h2>Cestino</h2>
        <div class="trashContent">
            <ul>
                @foreach ($students as $student)
                    <li class="d-flex justify-content-between align-items-center">
                        <div class="itemValue"> {{ $student->name }} </div>
                        <div class="itemButtons">
                            <form action=" {{ route('students.restore', $student->id) }} " method="POST">
                                @csrf
                                @method('PATCH')
                                <button type="submit" class="btn btn-success">Ripristina</button>
                            </form>
                            <a href=" {{ route('students.show', $student->id) }} " class="btn btn-primary">Info</a>
                            <form class="deleteForm" action=" {{ route('students.drop', $student->id) }} " method="POST"
                                data-name="{{ $student->name }}">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">Elimina</button>
                            </form>
                        </div>
                    </li>
                @endforeach
            </ul>
        </div>
    </div>
@endsection
