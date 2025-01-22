<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\UserEloquent;

class UserEloquentController extends Controller
{
    //
    function queries(){
        //$response = UserEloquent::all(); // get() and all() both are same work
        //$response = UserEloquent::where("name", "Gurjeet")->get(); // Where condition
        /* $response = UserEloquent::where("name", "Gurjeet")->first(); //Get the first result with convert the variable name into the array because single result is get as object. So first we convert the object into the array.
        $response = [ $response]; */
        /* $response = UserEloquent::find(1);
        $response = [ $response]; // Get the result with id */
        $response = UserEloquent::insert([
            "name" => "Harshdeep",
            "email" => "harshdeep@demo.com",
            "password" => 123456
        ]);
        return view('userEloquent',['response' => $response]);
    }
}

