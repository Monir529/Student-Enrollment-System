<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;
class EnglishController extends Controller
{
    public function show(){
        $student=Student::where('department','english')
                        ->get();
    
        return view('admin.english')->with('student',$student);
       
     }

     public function delete($student_id){
        Student::where('student_id',$student_id)
                 ->delete();
                 return redirect('/english');
    
    }
}
