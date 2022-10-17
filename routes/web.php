<?php

use App\Http\Controllers\FlaskController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\SigninController;
use App\Http\Controllers\SignoutController;
use App\Http\Controllers\SignupController;
use Illuminate\Support\Facades\Route;

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


// Authentication routes here
Route::group(['middleware' => 'guest'],function(){
    //Sign-up routes
    Route::get('/',[SignupController::class,'index'])->name('index');
    Route::post('/signup',[SignupController::class,'StoreUser'])->name("signup");
    //Sign-in routes
    Route::get('/signin',[SigninController::class,'index'])->name("signin.page");
    Route::post('/CheckUser',[SigninController::class,'CheckUser'])->name("signin");
});
//Signout-routes
Route::post("signout",[SignoutController::class,'logout'])->name("signout");


// Other Website Routes

//Home page routes
Route::get('/home',[HomeController::class,'index'])->name("home");

//API routes
Route::post("bindFlask",[FlaskController::class,'bindFlask'])->name("image.upload");
Route::get('/result',[FlaskController::class,'index'])->name("result");
