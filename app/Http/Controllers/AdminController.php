<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function dashboard(){
        return view("admin.dashboard");
    }

    public function manageAdmission(){
        $admissions = User::where("status",false)->get();
        return view("admin.manageAdmission", compact("admissions"));
    }
}
