<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StudentModelController extends Controller
{
    //
    function getStudents(){
        $students = \App\Models\Student::all(); // Get the all data from table.
        //return $students;
        return view('studentsModelView',['students' => $students]);
    }
}
