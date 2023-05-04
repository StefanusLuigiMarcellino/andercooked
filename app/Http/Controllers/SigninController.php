<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SigninController extends Controller
{
    //
    public function index()
    {
        return view('layouts.register-signin.signin', [
            "title" => "Sign In",
            "active"=> "signin"
        ]);
    }

    public function authenticate(Request $request)
    {
        $cresedential = $request->validate([
            'email' => 'required | email:dns',
            'password' => 'required'
        ]);

        if(Auth::attempt($cresedential))
        {
            $request->session()->regenerate();
            return redirect()->intended('/home');
        }

        return back()->with('failed', 'Login failed.');
    }


}
