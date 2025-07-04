<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Student;

class StudentController extends Controller
{
    public function index()
    {
        $students = Student::all();
        return view('students.list', compact('students'));
    }
    public function create()
    {
        return view('students.create');
    }
        public function store(Request $request)
    {
        $student = new Student();
        $student->name = $request->name;
        $student->age = $request->age;
        $student->grade = $request->grade;
        $student->save();

        return redirect('/students');
    }

    public function destroy($id)
    {
        $student = Student::findOrFail($id);
        $student->delete();

        return redirect('/students');
    }
    public function edit($id)
    {
        $student = Student::findOrFail($id);
        return view('students.edit', compact('student'));
    }

    public function update(Request $request, $id)
    {
        $student = Student::findOrFail($id);
        $student->name = $request->name;
        $student->age = $request->age;
        $student->grade = $request->grade;
        $student->save();

        return redirect('/students');
    }
}
