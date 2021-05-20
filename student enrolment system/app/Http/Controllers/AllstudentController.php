<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;
class AllstudentController extends Controller
{
    public function show(){
         
        $student=Student::get();
       
        return view('admin.allstudent')->with('student',$student);
        
     }

public function delete($student_id){
    Student::where('student_id',$student_id)
             ->delete();
             return redirect('/allstudent');

}
      
}
