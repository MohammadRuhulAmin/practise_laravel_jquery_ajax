<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;
class StudentController extends Controller
{
    public function index(){
        return view('student');
    }
    public function viewAllStudents(){
        $students = Student::all();
        return $students;
    }
    public function insertStudent(Request $request){
        $student  = new Student();
        $student->student_name = $request->student_name;
        $student->student_email = $request->student_email;
        $student->student_contact = $request->student_contact;
        $student->save();
        return "student is Inserted Successfully!";
    }
}
