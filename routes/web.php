<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('utama');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/contact', function () {
    return view('contact');
});

Route::get('/profile', function () {
    return view('profile');
});

//Route::get('/halamanutama', function () {
    //return view('utama');
//});
Route::get("/student","StudentController@index");

Route::get("/student/create","StudentController@create");

Route::post("/student","StudentController@store");

Route::get("/student/{id}/edit","StudentController@edit");

Route::put("/student/{id}","StudentController@update");

Route::delete("/student/{id}","StudentController@destroy");
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get("/ourstudent","UserStudentController@index");