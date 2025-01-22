<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\image;
class ImageController extends Controller
{
    //
    public function upload(Request $request){
        $path = $request->file('file')->store('public');
        $pathArray = explode('/',$path);
        $imagePath = $pathArray[1];
        $imageModel = new Image;
        $imageModel->path = $imagePath;
        if($imageModel->save()){
            return redirect('imageList49');
        }else{
            return "Image not uploaded";
        }
    }

    public function list(){
        $images = Image::all();
        return view('display49',['images' => $images]);
    }
}
