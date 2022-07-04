<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function index() {
        $students = Student::all();
        return view('home', ['students'=>$students]);
    }

    public function create(Request $request) {
        $student = new Student;
        $student->name = $request->name;
        $student->city = $request->city;
        $student->marks = $request->marks;
        $student->save();
        return redirect(route('index'));
    }

    public function edit($id) {
        $student = Student::find($id);
        return view('editForm', ['student'=>$student]);
    }

    public function update(Request $request, $id) {
        $student = Student::find($id);
        $student->name = $request->name;
        $student->city = $request->city;
        $student->marks = $request->marks;
        $student->save();
        return redirect(route('index'));
    }

    public function destroy ($id) {
        Student::destroy($id);
        return redirect(route('index'));
    }
}


