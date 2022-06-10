<?php
use App\Http\Controllers\MovieController;
use App\Http\Controllers\CalculatorController;
use App\Http\Controllers\userscontroller;
use Illuminate\Support\Facades\Route;
// use App\Http\Controllers\userscontroller;
use App\Http\Controllers\RegistrationController;
use App\Http\Controllers\FileUploadController;
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

// Route::get('/registration', function () {
//     return view('registration.registration');
// });
// Route::get('/viewuser', function () {
//     return view('registration.viewuser');
// });
Route::resource('registration', RegistrationController::class);


///
Route::get('student/create', 'StudentController@create')->name('student.create');
Route::get('student/{student}', 'StudentController@show')->name('student.show');

Route::get('file-upload', [FileUploadController::class, 'index']);
Route::post('store', [FileUploadController::class, 'store']);


Route::resource('movies', MovieController::class);

// Route::post('store', [MovieController::class, 'store']);