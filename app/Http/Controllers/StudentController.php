<?php

namespace App\Http\Controllers;
use App\Models\Student;
use App\Models\Course;
use Illuminate\Http\Request;

class StudentController extends Controller
{
   public function addStudent(){
    $student = new Student();
    $student->name = "first student";
    $student->course = "first course";
    $student->address = "first address";
    $student->phone = "first address";

    $student->save();

    return "Student has been Added..!";
   }
   public function addCourse($id){
       
    $student = Student::find($id);
    $course = new Course();
    $course->title = "MCA";
    $student->courses()->save($course);

    return "Course has been Added..!";
    }

}
