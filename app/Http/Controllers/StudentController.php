<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Student;
class StudentController extends Controller
{
public function index(){
    $students=Student::all();
    return view ("student.index",compact("students"));
}
public function create(){
    return view("student.create")    ;}
public function store(Request $request){
    // dd($request->all());
    $student=Student::create(
        [
            "nama_depan"=>$request->nama_depan,
           "nama_belakang"=>$request->nama_belakang,
           "alamat"=>$request->alamat 
        ]
        );
        return redirect("/student");
}
public function edit($id) {
$student=Student::find($id);
return view ("student.edit",compact("student"));
}
public function update(Request $request, $id) {
$student=Student::find($id);
$student->update(
    [
        "nama_depan"=>$request->nama_depan,
        "nama_belakang"=>$request->nama_belakang,
        "alamat"=>$request->alamat
    ]
    );
return redirect("/student");
}
public function destroy($id) {
$student=Student::find($id);
$student->delete();
return redirect("/student");
}
}
