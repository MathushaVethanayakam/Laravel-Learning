<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;

class StudentController extends Controller
{
    //
    public function create()
    {
        return view('create_user');
    }
    public function store(Request $request)
    {
        /*
        $name=$request->input('name');
        $age=$request->input('age');
        $phone=$request->input('phone');

        $student=new Student;
        $student->name=$name;
        $student->age=$age;
        $student->phone=$phone;

        $student->save();

        return "user has been successfully created".$student->id;*/

        $data=$request->only(['name','age','phone']);

        $student=Student::create($data);

        return "user has been successfully created ".$student->id;
        


    }
    public function index()
    {
        $students=Student::all();
        
        return view('index',compact($student));
    }
}
