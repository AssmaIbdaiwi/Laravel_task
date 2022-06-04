<?php

use App\Http\Controllers\CalculatorController;
use Illuminate\Support\Facades\Route;
// use App\Http\Controllers\userscontroller;


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


// Route::get('/laravel31May', function () {
//     return view('laravel31May');
// });

// Route::get('/contactus', function () {
//     return view('contactus');
// });
// Route::get('/aboutus', function () {
//     return view('aboutus');
// });
// Route::get('/user',[userscontroller::class,'getall']);
// Route::get('/getid',[userscontroller::class,'getid']);


Route::get('/calculatortask', function () {
    return view('calculatortask.calculator');
});

Route::get('calculator',[CalculatorController::class,'add']);
// Route::get('calculator',[CalculatorController::class,'sub']);
// 
// Route::post('/calculate', 'CalculatorController@add');
