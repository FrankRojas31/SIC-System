<?php

namespace App\Http\Controllers\Student;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\StudentRequest;
use App\Models\Student;

class StudentController1 extends Controller
{
    public function index(){
        return view("formulario");
    }

    public function store(Request $request){
        $request->validate([
            'name_student' => 'required|string',
            'last_student' => 'required|string',
            'id_student' => 'required|string|unique:students,id_student',
            'birthday' => 'required|date',
            'comments' => 'nullable|string',
        ]);

        $estudiante = Student::create([
            'name_student' => $request->input('name_student'),
            'last_student' => $request->input('last_student'),
            'id_student' => $request->input('id_student'),
            'birthday' => $request->input('birthday'),
            'comments' => $request->input('comments'),
        ]);

        return redirect()->route('dashboard');
    }
}
