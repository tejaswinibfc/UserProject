<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        return view('layout.main_template');
    }

    public function register(){
        dd("dkjsahfh");
    }

}


