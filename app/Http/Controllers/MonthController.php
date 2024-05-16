<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MonthController extends Controller
{
    //
    public function __construct()
    {
        $this->middleware('month');
    }
    public function numToMonth(Request $request,$num)
    {
        //$num=$request->num;
        $user=$request->input('user');
        if($num==1)
        {
            return "Jan ".$user;
        }
        elseif($num==2)
        {
            return "Feb";
        }
        elseif($num==3)
        {
            return 'mar';
        }
        
    }
}
