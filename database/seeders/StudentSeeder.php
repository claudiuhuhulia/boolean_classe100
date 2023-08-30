<?php

namespace Database\Seeders;

use App\Models\Student;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Student;


class StudentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        $students = config('studentList');

        foreach ($students as $student) {
            $new_student = new Student();

            $new_student->fill($student);

            $new_student->save();
        }

    }
}
