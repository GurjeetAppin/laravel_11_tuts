<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UploadFile38Controller extends Controller
{
    //
    function uploadFile(Request $request){
        $path = $request->file('file')->store('public');
        $fileNameArray = explode('/',$path);
        $fileName = $fileNameArray[1];
        return view('uploadView',['paths'=>$fileName]);
    }
}
