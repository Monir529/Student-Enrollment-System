<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Admin;
use Illuminate\Support\Facades\Hash;
use App\Models\Student;
use Illuminate\Support\Facades\Redirect;
class AdminController extends Controller
{
    //

public function show(){
   return view('admin.admin_dashboard');
}

public function profile(){
    return view('admin.profile');
 }
 public function setting(){
    return view('admin.setting');
 }

public function logout(Request $request){
    $request->session()->flush();
    return Redirect::to('/backend');
}

public function login(Request $request){
        
    
        $email=$request->email;
        $password=$request->password;

 
          $data=Admin::where("email",$email)
                 ->where("password", $password)
                ->first();
 
                if($data){
                    $request->session()->put('name',$data->name);
                   $request->session()->put('id',$data->id);
                    return Redirect::to('/admin_dashboard');
                }
                else{
                 $request->session()->flash('message','Invalid Email or Password');
                return redirect()->back();
              }
    }

    public function view(){
        return view('student_dashboard');
     }

    public function student_login(Request $request){
        
    
        $email = $request->email;

        $student = Student::where('email', '=', $email)->first();

        if (!$student) {
            return redirect()->back();
        }

        if (!Hash::check($request->password, $student->password)) {
            return redirect()->back();
        }else{
            $request->session()->put('student_name',$student->student_name);
            $request->session()->put('student_id',$student->student_id);
        return redirect('/student_dashboard');
        }
    }

}
