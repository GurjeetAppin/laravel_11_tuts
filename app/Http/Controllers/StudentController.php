<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StudentController extends Controller
{
    //
    function showStudent(){
        return "List of students";
    }

    function addStudent(){
        return "Add students";
    }

    function deleteStudent(){
        return "Delete student";
    }

    function aboutStudent($name){
        return $name;
    }
}
