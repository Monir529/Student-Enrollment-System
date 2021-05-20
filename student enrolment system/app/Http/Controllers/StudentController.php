<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Hash;
class StudentController extends Controller
{
    public function view($student_id){
        $student=Student::select('*')
                 ->where('student_id',$student_id)
                ->first();
 return view('admin.student')->with('student',$student);
                
    }

    public function edit($student_id){
        $student=Student::select('*')
                 ->where('student_id',$student_id)
                ->first();
 return view('admin.update')->with('student',$student);

}

 function update(Request $request,$student_id){
 
    $data=array();
    $data['student_name']=$request->student_name;
    $data['student_roll']=$request->student_roll;
    $data['father_name']=$request->father_name;
    $data['mother_name']=$request->mother_name;
    $data['email']=$request->email;
    $data['phone']=$request->phone;
    $data['address']=$request->address;
    $data['password']=Hash::make($request->password);
    $data['admission_year']=$request->admission_year;

    Student::where('student_id',$student_id)
             ->update($data);

return redirect('/allstudent');

}

public function profile(Request $request){
  $student_id=$request->session()->get('student_id'); 
  
  $student=Student::select('*')
                 ->where('student_id',$student_id)
                ->first();
 return view('student_view')->with('student',$student);
}

public function logout(Request $request){
    $request->session()->flush();
    return Redirect::to('/');
}

public function setting(Request $request){
    $student_id=$request->session()->get('student_id'); 
   
    $student=Student::select('*')
    ->where('student_id',$student_id)
   ->first();
   //print_r($student);
return view('student_setting')->with('student',$student);
}

public function setting_update(Request $request,$student_id){
    $data['email']=$request->email;
    $data['phone']=$request->phone;
    $data['address']=$request->address;
    $data['password']=Hash::make($request->password);

    
    Student::where('student_id',$student_id)
             ->update($data);

return redirect('/student_profile');

}

}