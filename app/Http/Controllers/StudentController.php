<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $students = Student::all();
        return view('students.index', compact('students'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Student $student)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Student $student)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Student $student)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Student $student)
    {
        $student->delete();
        return to_route('students.index')
            ->with('alert-type', 'danger')
            ->with('alert-message', "Student '$student->name' moved into Trash.");
    }

    public function trash()
    {
        $students = Student::onlyTrashed()->get();
        return view('students.trash', compact('students'));
    }

    public function drop(string $id)
    {
        $student = Student::onlyTrashed()->findOrFail($id);
        $student->forceDelete();

        return to_route('students.index')
            ->with('alert-type', 'danger')
            ->with('alert-message', "Student '$student->name' permanently deleted.");
    }

    public function restore(string $id)
    {
        $student = Student::onlyTrashed()->findOrFail($id);
        $student->restore();

        return to_route('students.trash')
            ->with('alert-type', 'success')
            ->with('alert-message', "Student '$student->name' successfully restored.");
    }
}
