<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\MonthController;
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
/*
Route::get('/', function () {
    return view('welcome');
});*/

Route::get('login',[LoginController::class,'login']);

Route::post('lo-pro',[LoginController::class,'login_process']);

Route::get('post/{id}',[PostController::class,'show']);

Route::get('month/{num}/',[MonthController::class,'numToMonth']);

Route::view('hea','layout');

//Route::view('/','home');

Route::get('/',function(){
    $heading="This is the home page";
    $no_of_users=1;
    $is_user_online=0;
    $settings='User settings';
    $authors=['author1','author2','author3'];
    return view('home',compact('heading','no_of_users','is_user_online','settings','authors'));
});

Route::view('/contact','contact');