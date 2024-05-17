<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\loginController;
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



Route::get('/',[StudentController::class,'create']);

Route::post('/store',[StudentController::class,'store']);

Route::get('login',function(){
    return view('login');
});
Route::post('store',[RegisterController::class,'store']);

Route::view('home','home');
Route::view('register','register');
Route::post('authenticate',[loginController::class,'authenticate']);

Route::get('logout',[loginController::class,'logout']);