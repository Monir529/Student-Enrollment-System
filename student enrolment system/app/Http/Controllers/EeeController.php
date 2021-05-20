<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;
class EeeController extends Controller
{
    public function show(){
        $student=Student::where('department','eee')
                        ->get();
    
        return view('admin.eee')->with('student',$student);
       
     }

     public function delete($student_id){
        Student::where('student_id',$student_id)
                 ->delete();
                 return redirect('/eee');
    
    }
}
