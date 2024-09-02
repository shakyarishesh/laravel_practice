<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UsersController extends Controller
{
    //
    //for connect to database
    function users()
    {
        $users = DB::select('select * from users');
        return view('users',['users'=>$users]);
    }
}
