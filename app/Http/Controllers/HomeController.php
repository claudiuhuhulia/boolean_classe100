<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;


class HomeController extends Controller


{
    public function index()
    {
        $students = Student::all();
        return view('home', compact('students'));
    }

    // Store Comic
    public function store(Request $request)
    {
        // VALIDATION
        $request->validate([
            'title' => 'required|string',
            'thumb' => 'required|string',
        ]);

        $data = $request->all();
        $student = new Student;
        $student->fill($data);
        $student->save();

        return to_route('students.show', $student);
    }

    // Store Comic
    public function update(Request $request, Student $student)
    {
        // VALIDATION
        $request->validate([
            'title' => 'required|string',
            'thumb' => 'required|string',
        ]);

        $data = $request->all();
        $student->update($data);
        return to_route('students.show', $student);
    }
}
