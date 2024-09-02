<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class UserController2 extends Controller
{
    //
    function getUser()
    {
        $response = Http::get('https://jsonplaceholder.typicode.com/users/1');
        $response = $response->body();
        return view('user2', ['data'=>json_decode($response)]);
    }
}
