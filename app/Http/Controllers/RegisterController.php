<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class RegisterController extends Controller
{
    //
    public function store(Request $request)
    {
        $request->validate([
            'name'=>'required',
            'email'=>'required',
            'password'=>'required',
        ]);

        $user=new User;
        $user->name=$request->input('name');
        $user->email=$request->input('email');
        $user->password=$request->input('password');
        $user->save();

        Auth::login($user);

        return redirect('/home');
    }
}
