<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/
Route::get('/', function () {
    return view('registration-form');
});
Route::get('/all-students', function () {
    return view('show-students');
});

Route::post('/registered', 'StudentsController@processRegistration');
Route::post('/add-student', 'StudentsController@showStudentsForm');
Route::post('/all-students', 'StudentsController@showList');
Route::post('/update', 'StudentsController@showUpdate');
Route::post('/update/{id}' , 'StudentsController@edit');
Route::post('/delete/{id}' , 'StudentsController@deleteStudent');


