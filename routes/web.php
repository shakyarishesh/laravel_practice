<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\UserFormController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\RouteController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\UserController2;
use App\Http\Controllers\UserController3;
use App\Http\Controllers\UserController4;
use App\Http\Controllers\UsersController;

Route::get('/', function () {
    return view('welcome');
});

//view page:home 
//url : /home
// Route::get('/home', function () {
//     return view('home');
// });
//ALTERNATE CALLING THROUGH CONTROLLER
Route::get('/home',[UserController::class,'home']);

//home2
// Route::view('/home2','home2');

// Route::view('/home', 'home');

//for about page
Route::get('/about/{name}', function ($name) {
    // echo $name;
    //to pass it to the respective view page->
    return view('about', ['name'=>$name]);
});

//calling controller
Route::get('/user', [UserController::class, 'getUser']);
Route::get('about', [UserController::class, 'aboutUser']);
Route::get('setuser/{name}', [UserController::class, 'setUser']);
Route::get('admin', [UserController::class, 'login']);


//about2.blade.php
Route::get('/about2', [UserController::class, 'about2']);

//user form
Route::view('/user-form', 'user-form');


Route::post('adduser', [UserFormController::class,'addUser']);

//user form 2( for checkbox, radio button, range and dropdown)
Route::view('/user-form2','user-form2');
Route::post('/adduser2',[UserFormController::class,'addUser2']);

//for URL generation
Route::view('/homeurl','homeURL');
Route::view('/abouturl','aboutURL');
//with child path
Route::view('/abouturl/{name}','aboutURL');


//home2 used for named routes
Route::view('/home/profile/user','home2')->name('hm');
Route::view('/home/profile/user/{name}','home2')->name('user');

Route::get('/show',[HomeController::class, 'show']);
Route::get('/user',[HomeController::class, 'user']);

//for middleware group (home3 and about3)
//for single Route
//Route::view('/home3','home3')->middleware('check1');
// Route::view('/home3','home3');
// Route::view('/about3','about3');

//middleware applied to group of Routes

Route::middleware('check1')->group(function(){
    Route::view('/home3','home3');
Route::view('/about3','about3');
});


//connect to database
Route::get('/users',[UsersController::class,'users']);

//27# display db data on UI
Route::get('/userlist',[UsersController::class,'users']);

//28# Eloquent Model
Route::get('/students', [StudentController::class,'getStudents']);

//30# Http client
Route::get('/user2',[UserController2::class,'getUser']);

//31# Database Query Builder
Route::get('/view',[UserController3::class,'view']);
Route::get('/insert',[UserController3::class,'insert']);
Route::get('/update',[UserController3::class,'update']);
Route::get('/delete',[UserController3::class,'delete']);

//32# Eloquent Model Query Builder
Route::get('/user4/view',[UserController4::class,'view']);
Route::get('/user4/insert',[UserController4::class,'insert']);
Route::get('/user4/update',[UserController4::class,'update']);
Route::get('/user4/delete',[UserController4::class,'delete']);

//33#Route methods
Route::view('/form','route');

// Route::get('/route/get',[RouteController::class,'get']);
// //post
// Route::post('/route/get',[RouteController::class,'post']);
// //put
// Route::put('/route/get',[RouteController::class,'put']);
// //delete
// Route::delete('/route/get',[RouteController::class,'delete']);


//34# any and match function
//to call same function in same route url but on different route methods then we can use any method of Route using example for the above used routes as:
// Route::any('/route/get',[RouteController::class,'any']);


Route::match(['get','post'],'/route/get',[RouteController::class,'group1']);
Route::match(['put','delete'],'/route/get',[RouteController::class,'group2']);