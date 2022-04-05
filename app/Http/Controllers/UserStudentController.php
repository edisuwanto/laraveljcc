<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Student;

class UserStudentController extends Controller
{
    public function index(){
        $students=Student::all();
        return view("ourstudent",compact("students"));
    }
}
