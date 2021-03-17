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
        $isValidate = $request->validate([
            
            'student_name'=>"required",
            'student_email'=>'required',
            'student_contact'=>'required',

        ]);
        if($isValidate){
            $student  = new Student();
            $student->student_name = $request->student_name;
            $student->student_email = $request->student_email;
            $student->student_contact = $request->student_contact;
            $student->save();
            return "student is Inserted Successfully!";
        }
        else{
            return "validation error Occored!";
        }
        
    }
    public function editStudent($id){
        $student = Student::find($id);
        if(!empty($student))return response()->json($student);
        else return "Student Information not Found!";
    }
   

    public function deleteStudent($student_id){
        $student = Student::find($student_id);
        $student->delete();
        return "student is deleted successfully!";
    }
    public function UpdateStudent(Request $request,$student_id){
        
        $student = Student::find($student_id);
        $student->student_name = $request->student_name;
        $student->student_email = $request->student_email;
        $student->student_contact = $request->student_contact;
        $student->save();
        return response()->json($student);
    }
}
