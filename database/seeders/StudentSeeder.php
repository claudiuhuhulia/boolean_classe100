<?php

namespace Database\Seeders;

use App\Models\Student;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Http\Request;

class StudentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */

    // Create Students
    public function create()
    {
        return view('students.create');
    }

    // Store Comic
    public function store(Request $request)
    {

        $data = $request->all();
        $student = new Student;
        $student->fill($data);
        $student->save();

        return to_route('students.show', $student);
    }
}
