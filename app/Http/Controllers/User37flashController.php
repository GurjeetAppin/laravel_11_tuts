<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class User37flashController extends Controller
{
    //
    function addFlashUser(Request $request){
        $request->session()->flash('message', 'User add successfully');
        return redirect('user37Flash');
    }
}
