<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
/* This used for http request and API */
use Illuminate\Support\Facades\Http;
class UserHttpController extends Controller
{
    //
    function getHttpUser(){
        $response = Http::get('https://jsonplaceholder.typicode.com/users/1');
        /* return $response->body(); // Get the body of data.
        return $response->status(); // Get the status like 200/404 etc.
        return $response->headers(); // Get the headers. */
        $response = $response->body();
        return view('userHttpView',['response' => json_decode($response)]);
    }
}
