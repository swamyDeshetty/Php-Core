<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\employe;

class CustomAuthController extends Controller
{
    public function login(){
        return view('login');
    }
    public function register(){
        return view("users");
    }
    public function getdata(){
        $data=employe::all();
        return view('list',['users'=>data]);
    }
}
