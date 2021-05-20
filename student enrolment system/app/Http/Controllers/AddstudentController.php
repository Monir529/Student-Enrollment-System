<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;
use Illuminate\Support\Str;

class AddstudentController extends Controller
{
    public function show(){
        return view('admin.addstudent');
     }

     public function store(Request $request){

        $request->validate([
            'student_name'             => 'required|min:4|max:20', 
            'student_roll'             => 'required',  
            'father_name'             => 'required|min:4|max:20', 
            'mother_name'             => 'required|min:4|max:20',                     
            'email'            => 'required|email|unique:users',     
            'password'         => 'required| min:6',
            'phone'               =>  'required|min:11|max:15',
            'address'             => 'required',
            'department'             => 'required',
            'admission_year'             => 'required',
          
        ]); 


         $student= new Student();

        $student->student_name=$request->student_name;
        $student->student_roll=$request->student_roll;
        $student->father_name=$request->father_name;
        $student->mother_name=$request->mother_name;
        $student->email=$request->email;
        $student->phone=$request->phone;
        $student->address=$request->address;
        $student->password=Hash::make($request->password);   
        $student->department=$request->department;
        $student->admission_year=$request->admission_year;
        
        $image=$request->file('image');
     
       
        if($image){
          $image_name=Str::random(20);
          $ext=strtolower($image->getClientOriginalName());
          $image_full_name=$image_name.'.'.$ext;
          $upload_path='images/';
          $image_url=$upload_path.$image_full_name;
          $success=$image->move($upload_path,$image_full_name);

        	if($success){
        		$student->image=$image_url;
          
        		$student->save();
            $request->session()->put('message','Student added successfully');
        		return redirect('addstudent');


        	}

        }
        $student->image='';
      
        $student->save();
        $request->session()->put('message','Student added successfully');
        return redirect('addstudent');

     }
      

}
