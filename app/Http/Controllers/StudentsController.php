<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\ntnt;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use App\Student;

class StudentsController extends Controller
{
    public function showStudentsForm (Request $request){
    	return view ('registration-form' , compact('students'));
    }

    public function processRegistration(Request $request){
        $id = $request->id;
    	$first_name = $request->first_name;
    	$middle_initial = $request->middle_initial;
    	$last_name = $request->last_name;
    	$course = $request->course;
    	$student_number = $request ->student_number;

    	$student = new Student;
        $student->id = $id;
    	$student->first_name = $first_name;
        $student->middle_initial = $middle_initial;
        $student->last_name = $last_name;
    	$student->course = $course;
    	$student->student_number = $student_number;
    	$student->save();

    	return view('registration-complete', [
            'id' => $id,
    		'first_name' => $first_name,
    		'middle_initial' => $middle_initial,
    		'last_name' => $last_name,	
    		'course' => $course,
    		'student_number' => $student_number
    	]);
    }

     public function showList(){
        $students = student::orderBy('id')->get();

        return view('show-students' , [
            'students' => $students]);
    }

     public function showUpdate(Request $request){
         return view('update', [
             'id' => $request -> StudentID,
             'first_name' => $request -> firstname,
             'middle_initial' => $request -> middle,
             'last_name' => $request -> lastname,
             'course' => $request -> course,
             'student_number' => $request -> studentnumber]);
     }
    
     public function edit(Request $request,$id){
        $connect = student::find($id);
        $connect->first_name = $request->firstname;
        $connect->middle_initial = $request->middle;
        $connect->last_name = $request->lastname;
        $connect->course = $request->course;
        $connect->student_number = $request->studentnumber;
        $connect->save();

        $students = DB::table('students')->get();
        return view('show-students', [
            'students' => $students,
            ]);
     }

     public function deleteStudent(Request $request,$id){
         $students = student::find($id)->delete();
         
         return view('show-students' , [
            'students' => $students,
            ]);
     }
 }