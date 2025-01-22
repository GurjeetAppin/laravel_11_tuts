<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student41;


class Student41Controller extends Controller
{
    //
    function addStudent(Request $request){
        $student = new Student41;
        $student->name = $request->name;
        $student->email = $request->email;
        $student->batch = $request->batch;
        $student->save();
        if($student){
            return "Student Add successfully";
        }else{
            return "Something wrong";
        }
    }

    function list(){
        //$studentList = Student41::all();
        $studentList = Student41::paginate(3);
        return view('listStudent42',['studentdata'=>$studentList]);
    }

    function delete($id){
        $isDeleted = Student41::destroy($id);
        if($isDeleted){
            return redirect()->back();
        }
    }

    function edit($id){
       $data = Student41::find($id);
       return view('student44Edit',['studentData' => $data]);
    }

    function editStudent(Request $request, $id){
        $student = Student41::find($id);
        $student->name = $request->name;
        $student->batch = $request->batch;
        $updateRec = $student->save();
        if($updateRec){
            return redirect('listStudent42');
        }else{
            return "Update operation failed";
        }
    }

    function search(Request $request){
        $studentList = Student41::where('name','like',"%$request->search%")->get();
        return view('listStudent42',['studentdata'=>$studentList,'serach' => $request->search]);
    }

    function deleteMultiple(Request $request){
        $student = Student41::destroy($request->ids);
        if($student){
            return redirect('listStudent42');
        }else{
            return "Student data not deleted";
        }
    }
}
