<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;
    //if tables names are not matched then
    //protected $table = "Table name";

    function test()
    {
        return "This is dummy function";
    }
}
