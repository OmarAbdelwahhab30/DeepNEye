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


Route::group(['middleware' => 'guest'],function(){
    //signup
    Route::get('/',[SignupController::class,'index']);
    Route::post('/signup',[SignupController::class,'StoreUser'])->name("signup");


    //signin
    Route::get('/signin',[SigninController::class,'index'])->name("signin.page");
    Route::post('/CheckUser',[SigninController::class,'CheckUser'])->name("signin");
});

//home
Route::get('/home',[HomeController::class,'index'])->name("home");


//signout
Route::post("signout",[SignoutController::class,'logout'])->name("signout");


//Images
Route::post("uploadImage",[FlaskController::class,'UploadImage'])->name("image.upload");
