<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;
class BbaController extends Controller
{
    public function show(){
        $student=Student::where('department','bba')
                        ->get();
    
        return view('admin.bba')->with('student',$student);
        
     }

     public function delete($student_id){
        Student::where('student_id',$student_id)
                 ->delete();
                 return redirect('/bba');
    
    }
}
