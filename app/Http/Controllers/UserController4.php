<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController4 extends Controller
{
    //
    function view()
    {
        //$response = User::all();
        $response = User::get();

        //to get only the first data
        //$response = User::first();
        //$response = [$response];

        //by id
        //$response = User::fint(2);

        //$response = User::where('email','rishesh@gmail.com')->get();

        return view('user4',['users'=>$response]);
    }

    function insert()
    {
        $response = User::insert([
            'name'=>'jenny',
            'email'=>'jenny@gmail.com',
            'password'=>'jenny',
        ]);
        if($response)
        {
            echo "Data inserted";
        }else
        {
            echo "Data not inserted";
        }
    }

    function update()
    {
        $response = User::where('name','aaradhana')->update([
            'password'=>'aaradhana',
        ]);
        if($response)
        {
            echo "Data updated";
        }else
        {
            echo "Data not updated";
        }
    }

    function delete()
    {
        $response = User::where('name','aaradhana')->delete();
        if($response)
        {
            echo "Data deleted";
        }else
        {
            echo "Data not deleted";
        }
    }
}
