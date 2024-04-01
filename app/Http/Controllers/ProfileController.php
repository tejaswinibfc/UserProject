<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class ProfileController extends Controller
{
    public function index(){
        return view("login");
    }

    public function login(Request $request)
    {
       $request->validate([
            'email' => 'required',
            'password' => 'required',
        ]);
         $credentials=$request->only('email','password');
         if(Auth::attempt($credentials)){
            return redirect()->intended('dashboard')->with('success',"Login successfully");
            
         }else{
            return redirect("login")->with('error','Login details are not valid');
            
         }
    }

    

    
}
