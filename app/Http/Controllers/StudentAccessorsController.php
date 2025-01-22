<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\StudentsAccessors;

class StudentAccessorsController extends Controller
{
    /* Accessors */
    public function list(){
        return StudentsAccessors::all();
    }

    /* Mutators */
    function save(){
       $student = new StudentsAccessors();
       $student->name = "Dell";
       $student->batch = 1234;
       $student->email = "Dell@demo.com";
        if($student->save()){
            echo "New record inserted";
        }else{
            echo "Plz try again";
        }
    }
}
