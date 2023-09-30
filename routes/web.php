<?php

use App\Http\Controllers\LoginController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\SmsController;
use App\Http\Controllers\ChartController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Session;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/index', function () {
    return view('index');
});

Route::get('/home',function(){
    return view('index');
})->name('home');

Route::get('/login',function(){
    // echo $username;
        // The session variable 'key' is not set
        return view('login');
      
         
});

Route::post('/login',[LoginController::class,'loginuser']);

// Route::post('/loginned',function(Request $req){
//         $req->session()->set('username');
// });

Route::post('/register',[RegisterController::class,'newuser']);

Route::get('/logout',[LoginController::class,'logout']);
    
Route::get('/register',function(){
    return view('register');
    
});

// Route::post('/sendsms',[SmsController::class,'sendsms']);

Route::post('/info',[UserController::class,'addinfo']);
Route::get('/viewchart',[ChartController::class,'chart']);

