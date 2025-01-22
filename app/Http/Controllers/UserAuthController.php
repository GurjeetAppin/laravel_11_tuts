<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserAuthController extends Controller
{
    function login(Request $request){
       $user = User::where('email',$request->email)->first();
       if(!$user || !Hash::check($request->password,$user->password)){
            return [
                'result' => 'user not found',
                'success' => false
            ];
       }
       $success['token'] = $user->createToken('MyApp')->plainTextToken;
       $success['name'] = $user->name;

       return [
        'result' => $success,
        'message' => 'User login successfully.'
       ];
    }

    function signup(Request $request){
        $input = $request->all();
        $input['password'] = bcrypt($input['password']);
        $user = User::create($input);
        $success['token'] = $user->createToken('MyApp')->plainTextToken; // This is make token. We add any type of text and this text is converted into the token.
        $user['name'] = $user->name;
        return [
            'success' => true,
            'result' => $success,
            'message' => 'User Register successfully.'
        ];
    }
}
