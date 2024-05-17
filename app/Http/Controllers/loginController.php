<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Http\Models\User;
class loginController extends Controller
{
    //
    public function authenticate(Request $request)
    {
        $request->validate([
            'email'=>'required',
            'password'=>'required',

        ]);
        $email=$request->input('email');
        $password=$request->input('password');

        if(Auth::attempt(['email'=>$email,'password'=>$password]))
        {
            $user=User::where('email',$email)->first();
            Auth::login($user);
            return redirect('/home');
        }
        else
        {
            return back()->withErrors(['Invalid credential']);
        }

    }
    public function logout(){
        Auth::logout();
        return redirect('/login');
    }
}
