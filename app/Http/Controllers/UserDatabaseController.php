<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

/* Add database directly to controller */
use Illuminate\Support\Facades\DB;

class UserDatabaseController extends Controller
{
    //
    function userDatabase(){
        //return "User database series";
        //return DB::select('select * from users');
        $users = DB::select('select * from users');
        return view('userDataDisplayDatabase', ['users' => $users]);
    }
}
