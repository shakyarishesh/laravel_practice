<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UserController3 extends Controller
{
    //
    function view()
    {
        $result = DB::table('users')->get();
        
        //without using where clause to get with id
        //$user = DB::table('users')->find(1);

        //$result = DB::table('users')->where('name','rishesh')->get();
        //$result = DB::table('users')->first();
        //$result = [$result];

        

        return view('user3',['users'=>$result]);
    }

    function insert()
    {
        $result = DB::table('users')->insert([
            'name'=>'aaru',
            'email'=>'aaru@gmail.com',
            'password'=>'aaru',
        ]);

        if($result)
        {
            return "data inserted";
        }
        else{
            return "datana not insterted";
        }
    }

    function update()
    {
        $data = Db::table('users')->where('password','aaru')->update([
            'name'=>'aaradhana',
            'email'=>'aaradhana@gmail.com'
        ]);

        if($data)
        {
            return "data updated";
        }
        else{
            return "data not updated";
        }
    }

    function delete()
    {
        $data = Db::table('users')->where('password','')->delete();

        if($data)
        {
            return "data deleted";
        }
        else{
            return "data not deleted";
        }
    }
}
