<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserSession36Controller extends Controller
{
    //

    function login(Request $request){
        $request->session()->put('user', $request->user); // Store the data inside the session
        //echo session('user'); // To get the data from session
       /*  $request->session()->put('allData', $request->input()); // to get all data from form.
        print_r(session('allData')); */
        return redirect('profileSession36');  
    }

    function session36logout(){
        session()->pull('user'); // Destroye the session.
        return redirect('profileSession36');
    }

}
