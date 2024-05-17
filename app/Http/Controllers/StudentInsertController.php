<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StudentInsertController extends Controller
{
    //
    public function insert_form()
    {
        return view('insert_form');
    }
    public function insert(Request $request)
    {
        $name=$request->input('student_name');
        //Insert operation
        DB::insert("insert into student(name) values(?)",[$name]);
    }
}
