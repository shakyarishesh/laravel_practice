<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


class UserController extends Controller
{
    //home
    function home()
    {
        $name = "Rishesh";
        $users = ['anil','sam','petter'];
        return view('home',["users"=>$users,'name'=>$name]);
    }
    function getUser()
    {
        return view('user');
    }

    function aboutUser()
    {
        return "He is a person";
    }

    function setUser($name)
    {
        return view('setuser', ['name'=>$name]);
        // return "He is a person. His name is: " . $name;
    }

    //for  /views/admin/login
    function login()
    {
        return view('admin.login');
    }

    //about2.blade.php
    function about2()
    {
        return view('about2');
    }

    
}
