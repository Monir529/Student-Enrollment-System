<?php

namespace App\Http\Controllers;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Models\Teacher;

class TeacherController extends Controller
{
    public function show(){
        return view('admin.addteacher');
    }


    public function store(Request $request){


        $request->validate([
            'teacher_name'             => 'required|min:4|max:20', 
            'phone'               =>  'required|min:11|max:15',
            'address'             => 'required',
            'department'             => 'required',
           
          
        ]); 


         $teacher= new Teacher();

        $teacher->teacher_name=$request->teacher_name;
        $teacher->phone=$request->phone;
        $teacher->address=$request->address; 
        $teacher->department=$request->department;



        
       
        $image=$request->file('image');
     
       
        if($image){
            $image_name=Str::random(20);
          $ext=strtolower($image->getClientOriginalName());
          $image_full_name=$image_name.'.'.$ext;
          $upload_path='teacher/';
          $image_url=$upload_path.$image_full_name;
          $success=$image->move($upload_path,$image_full_name);

        	if($success){
        		$teacher->image=$image_url;
          
        		$teacher->save();
            $request->session()->put('message','Teacher added successfully');
        		return redirect('/addteacher');


        	}

        }
        $teacher->image='';
      
        $teacher->save();
        $request->session()->put('message','Teacher added successfully');
        return redirect('/addteacher');

     }

     public function view(){
         
        $teacher=Teacher::get();
       
        return view('admin.allteacher')->with('teacher',$teacher);
        
     }
     
      
}
