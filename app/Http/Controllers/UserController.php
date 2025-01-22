<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\View; // To check the view is exits or not.


class UserController extends Controller
{
    //
    function getUser(){
        //return "Gurjeet Singh";
        return view("user");
    }

    function aboutUser(){
        return "About user";
    }

    function getUserName($name){
        //return "Welcome user ".$name;
        return view('getUser', ['name' => $name]);
    }

    function adminLogin(){
        return view("admin.login");
        /* if(View::exists("admin.login")){
            return view("admin.login");
        }else{
            echo "View is not exits";
        } */
    }

    function userHome(){
        $name = "Gurjeet Singh";
        $users =  ['Prabh', 'Harsh', 'Manjot', 'Abhi'];
        return view("home", ['user' => $name, 'users' => $users]);
    }

    function userAbout(){
        return view('about2');
    }

    function addUser(Request $req){
        //return $req;
        echo $req->userName;
        echo $req->email;
        echo $req->city;
    }

    function addUser2(Request $req){
        //return $req;
        echo $req->city."<br>";
        echo $req->age."<br>";
        echo $req->gender."<br>";
        print_r($req->skill);
    }

    // Default validation from Laravel
    /* function userForm_Validation(Request $req){
        //return $req;
        $req->validate([
            "userName" => 'required | min:3 | max:10',
            "email" => 'required | email',
            "city" => 'required | max:20',
            "skill" => 'required',
        ]);
        return $req;
    } */

    
    function userForm_Validation(Request $req){
        //return $req;
        $req->validate([
            "userName" => 'required | min:3 | max:10',
            "email" => 'required | email',
            "city" => 'required | max:20',
            "skill" => 'required',
        ]);
        return $req;
    }


    // Custom validation
    function userForm_CustomValidation(Request $req){
        //return $req;
        $req->validate([
            "userName" => 'required | min:3 | max:10',
            "email" => 'required | email',
            "city" => 'required | max:20 | Uppercase',
            "skill" => 'required',
        ],[
            "userName.required" =>"User name can't be empty",
            "userName.min" =>"User name should be min 3 charactor",
            "userName.max" =>"User name max limit of 10 charactor",
            "email.required" => "The email should be a valid email address",
            "city.required" => "City is required for other state students",
            "skill.required" => "Select at least one skill"

        ]);
        return $req;
    }

    /* Part 20 */

    function showNameRoute(){
        //return view('homeNameRoute20');
        // Redirect to the page
        //return redirect()->to('home/profile/user');
        // But this for name Route main function
        return to_route("hm");
    }

    // User parameter
    function showNameRouteParams(){
        return to_route('snr',['name' => 'gurjeet']);
    }

    /* Part 21 */

    function showRouteGroup(){
        return 'Show student';
    }

    function showRouteGroup2(){
        return 'Add student';
    }

    /* 
        Part 22
        Make a student controller
    
    */

    
}
