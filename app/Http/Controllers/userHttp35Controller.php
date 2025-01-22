<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class userHttp35Controller extends Controller
{
    //
    function login(Request $req){
        
       /*  echo "Request method is ".$req->method()."<br>"; // Check the which method is used.
        echo "Path is ".$req->path()."<br>"; // Check the path.
        echo "Url is ".$req->url()."<br>"; // Check the url.
        echo "Get Input is ".$req->input("name")."<br>"; // Get Input value. $req->name
        print_r($req->input()); // Get all Input value
        print_r($req->collect()); // Get all collect value. Collect return the value in object form
    */ 
    if($req->isMethod('post')){
        echo "Post method";
    }

    if($req->is('user_form')){
        echo "User path";
    }

    echo "Check the IP ". $req->ip();
}
}
