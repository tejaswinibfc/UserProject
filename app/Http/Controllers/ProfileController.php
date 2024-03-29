<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function index(){
        return view("login");
    }

    public function login()
    {
        dd("okk");
    }
}
