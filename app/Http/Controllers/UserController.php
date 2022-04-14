<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;


class UserController extends Controller
{
    //
    public function index()
    {
        return view('login');
    }

    // User Authentication
    public function userAuthenticate(Request $request)
    {
        $credentials = $request->validate([
            "email" => "required",
            "password" => "required"
        ]);
        
        if (Auth::attempt($credentials)) {
            
            $request->session()->regenerate();
            
            //Fetch details of user
            $user = DB::table('users')->where('email',$request->email)->first();
            
            //Put name and id in session
            $request->session()->put('name',$user->name); 
            $request->session()->put('id',$user->id); 


            return redirect()->route('form');
        }
 
        return redirect('/')->with('errormsg','The provided credentials do not match our records.');

    }

    //Logout controller

    public function logout(Request $request)
    {
        $request->session()->flush();
        return redirect()->route('login');
    }

    
}
