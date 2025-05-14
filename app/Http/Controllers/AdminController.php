<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Course;
use App\Models\User;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function dashboard(){
        $countStudent = User::where("status",true)->count();
        $countAdmissions = User::where("status",false)->count();
        $countCourses = Course::count();
        $countCategories = Category::count();
        return view("admin.dashboard", compact("countStudent", "countAdmissions", "countCourses", "countCategories"));
    }

    public function manageAdmission(){
        $admissions = User::where("status",false)->get();
        return view("admin.manageAdmission", compact("admissions"));
    }
    public function manageStudent(){
        $students = User::where("status",true)->get();
        return view("admin.manageStudent", compact("students"));
    }

    public function StudentApprove($id){
        // if($user->status){
        //     return redirect()->route("admin.manageStudent")->with("msg","this student already approved");
        // }

        User::find($id)->update(["status" => 1]);
        return redirect()->route("admin.manageStudent")->with("msg","Student Apporoved Successfully");
    }
}
