<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


class StudentController extends Controller
{
    //
    function getStudents()
    {
        $data = new \App\Models\Student;
        echo $data->test();
        $students = \App\Models\Student::all();
        return view('students',['students'=>$students]);
    }
}
