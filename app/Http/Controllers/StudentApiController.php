<?php

namespace App\Http\Controllers;

use App\Models\Students_apis;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class StudentApiController extends Controller
{
    function list()
    {
        return Students_apis::all();
    }

    function addStudent(Request $req)
    {

        $rules = [
            'name' => 'required|min:2|max:10',
            'email' => 'email|required',
            'batch' => 'required'
        ];
        $validation = Validator::make($req->all(), $rules);
        if ($validation->fails()) {
            return $validation->errors();
        } else {
            $student = new Students_apis();
            $student->name = $req->name;
            $student->email = $req->email;
            $student->batch = $req->batch;
            if ($student->save()) {
                return [
                    "result" => "Student add succssfully"
                ];
            } else {
                return [
                    "result" => "Try again"
                ];
            }
        }
    }

    function updateStudent(Request $request)
    {
        $student = Students_apis::find($request->id);
        $student->name = $request->name;
        $student->email = $request->email;
        $student->batch = $request->batch;
        if ($student->save()) {
            return [
                'result' => 'Data updated successfully'
            ];
        } else {
            return [
                'result' => 'Data not updated'
            ];
        }
    }

    function deleteStudent($id)
    {
        $student = Students_apis::destroy($id);
        if ($student) {
            return [
                'result' => 'Record Deleted successfully'
            ];
        } else {
            return [
                'result' => 'Try again'
            ];
        }
    }

    function searchStudent($name)
    {
        $student = Students_apis::where('name', 'like', "%$name%")->get();
        if ($student) {
            return ['result' => $student];
        } else {
            return ['result' => 'record not found'];
        }
    }
}
