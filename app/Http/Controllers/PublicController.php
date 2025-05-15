<?php

namespace App\Http\Controllers;

use App\Models\Course;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PublicController extends Controller
{
    public function home(){
        $courses = Course::where("status",true)->get();
        return view("landing.homepage", compact("courses"));
    }

    public function viewCourse($id){
        $course = Course::find($id);
        return view("landing.courseView", compact("course"));
    }

    public function apply(Request $req){
        if($req->isMethod("POST")){
            $data = $req->validate([
                "name" => 'required',
                "contact" => 'required|unique:users',
                "email" => 'required|unique:users',
                "education" => 'string',
                "password" => 'required|string',
            ]);

            User::create($data);

            return redirect()->back()->with("msg","Applied successfully we will review you application ASAP.");
        }
        return view("landing.apply");
    }

    public function login(Request $req){
        if($req->isMethod("POST")){
            $data = $req->validate([
                "email" => "required|email",
                "password" => "required"
            ]);

            if(Auth::attempt($data)){
                if(Auth::user()->isAdmin){
                    return redirect()->route("admin.dashboard");
                }
                return redirect()->route("student.dashboard");
            }
            else{
                return redirect()->back()->with("msg", "invalid Credential");
            }
        }
        return view("landing.login");
    }

    public function Studentlogout(){
        Auth::logout();
        return redirect()->route("public.home");
    }
}
