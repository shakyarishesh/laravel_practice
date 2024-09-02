<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    //
    function show()
    {
        // return view('home2');
        //return redirect()->to('/home/profile/user');
        //redirectiong usong named route
        //return redirect()->to(route('hm'));
        return to_route('hm');
    }

    function user()
    {
        return to_route('user',["name"=>'rishesh']);
    }
}
