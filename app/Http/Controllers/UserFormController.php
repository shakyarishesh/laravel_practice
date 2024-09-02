<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserFormController extends Controller
{
    //userForm
    function addUser(Request $request)
    {

        $request->validate([
            "username"=>'required | min:3 | max:10',
            "email"=>'required | email',
            "city"=>'required | max:20 | uppercase',
            "skill"=>'required',
        ],[
            'username.required'=>'Username cannot be empty',
            'username.min'=>'Username min character should be 3',
            'username.max'=>'Username max character is 20',
            'email.required'=>'Email field cannot be empty',
            'city.uppercase'=>'City should be in uppercase'
        ]);

        return $request;
        // echo "Username is: " . $request->username;
        // echo "<br>";
        // echo "city is: " . $request->city;
        // echo "<br>";
        // echo "email is: " . $request->email;

    } 

    //for userForm2
    function addUser2(Request $request)
    {
        //return $request;
        echo $request->city;
        echo "<br>";
        echo $request->age;
        echo "<br>";
        print_r($request->skill);
    }
}
