<?php

use App\Formation;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});


Route::get('home', function() {
    return view("home", ['enroll'=>false, 'home'=>true, 'about'=>false, 'courses'=>false]);
});


Route::get('enroll', function() {
    $formation = Formation::all();
    echo $formation;
    return view('enroll', ['enroll'=>true, 'home'=>false, 'about'=>false, 'courses'=>false, "formation"=>$formation, "id"=>"wt"]);
});


Route::get('courses', function() {
    return view('courses', ['enroll'=>false, 'home'=>false, 'about'=>false, 'courses'=>true]);
});



Route::get('about', function() {
    return view('about', ['enroll'=>false, 'home'=>false, 'about'=>true, 'courses'=>false]);
});



Route::post('enrollcheck', 'EnrollController@store');




