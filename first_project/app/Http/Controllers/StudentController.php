<?php

namespace App\Http\Controllers;
use App\Student;
use App\Doctor;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function create(Request $request)
    {
        $student = new Student;
        $student->name = 'God of War';
        $student->save();

        $doctor = Doctor::find([3, 4]);
        $student->categories()->attach($doctor);

        return 'Success';
    }



    public function show(Student $student)
{
   return view('student.show', compact('student'));
}

}