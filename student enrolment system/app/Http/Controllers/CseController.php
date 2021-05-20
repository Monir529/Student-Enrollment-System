<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;
class CseController extends Controller
{
    public function show(){
        $student=Student::where('department','cse')
                        ->get();
    
        return view('admin.cse')->with('student',$student);
       
     }

     public function delete($student_id){
        Student::where('student_id',$student_id)
                 ->delete();
                 return redirect('/cse');
    
    }


}
