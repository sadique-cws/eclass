<?php

use App\Http\Controllers\PublicController;
use App\Http\Controllers\StudentController;
use Illuminate\Support\Facades\Route;


Route::controller(PublicController::class)->group(function(){
    Route::get("/", "home")->name("public.home");
    Route::match(["get","post"],"/apply", "apply")->name("public.apply");
    Route::match(["get","post"],"/student/login", "login")->name("login");
    Route::get("/logout", "Studentlogout")->name("public.logout");
});


Route::middleware("auth")->group(function(){
    Route::controller(StudentController::class)->group(function(){
        Route::prefix("student")->group(function(){
            Route::get("/", "dashboard")->name("student.dashboard");
        });
    });
});
