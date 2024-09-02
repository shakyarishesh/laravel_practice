<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RouteController extends Controller
{
    function get(Request $request)
    {
        return "get method";
    }

    //post
    function post(Request $request)
    {
        return "post method";
    }

    //put
    function put(Request $request)
    {
        return "put method";
    }

    //delete
    function delete(Request $request)
    {
        return "delete method";
    }

    function any()
    {
        return "Any function";
    }
    
    function group1()
    {
        return "group1 function";
    }

    function group2()
    {
        return "group2 function";
    }
}
