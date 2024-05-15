<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
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

Route::get('/',function(){
    return 'sample.txt';
});

Route::get('/home',function(){
    return view('home');
});

Route::get('/contact',function(){
    return view('contact');
});

Route::get('/user_form',function(){
    $title1="Send User Information";
    $title2="Easy to pass data in the view";
    //return view('user_form',['title'=>$title]);
    //return view('user_form',['title1'=>$title1,'title2'=>$title2]);
    return view('user_form')->withTitle1($title1)->withTitle2($title2)->withTest('Testing magic data');

});

Route::post('get-userdata',function(Request $request){
    //dd($request->all()); dump die
    $name=$request->input('name');
    $age=$request->input('age');
    $phone=$request->input('phone');

    //return "Hi,Your name is ".$name."<br> age is ".$age."<br> phone no is ".$phone;

    return redirect('user_form')->with('message','successfully submitted<br>'); 
});

Route::get('page/{id}/{type?}',function($id,$type=null){
    //return "page no ".$id;
    if($id == 1 && $type=="page")
    {
        return "First page";
    }
    elseif($id == 2 && $type=="book")
    {
        return "Second book";
    }
    elseif($id ==3)
    {
        return "page 3";
    }
    else
    {
        return "Other pages";
    }
});

Route::view('sample-page','page');

/*
Route::get('gallery/photoes',function(){
    return '<h2> Photoes </h2>';
});

Route::get('gallery/videos',function(){
    return '<h2> Videos </h2>';
});*/

Route::prefix('gallery')->group(function(){
    Route::get('photoes',function(){
        return '<h2> Photoes </h2>';
    });
    
    Route::get('videos',function(){
        return '<h2> Videos </h2>';
    });

    Route::get('documents',function(){
        return '<h2> documents </h2>';
    });

});

Route::get('month/{num}',function($num)
{
    if($num==1)
    {
        return 'Jan';
    }
    elseif($num==2)
    {
        return 'Feb';

    }
    elseif($num==3)
    {
        return 'mar';
    }
    
})->middleware('month');


