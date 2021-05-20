<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;
class LawController extends Controller
{
    public function show(){
        $student=Student::where('department','law')
                        ->get();
    
        return view('admin.law')->with('student',$student);
        
     }

     public function delete($student_id){
        Student::where('student_id',$student_id)
                 ->delete();
                 return redirect('/law');
    
    }
}
