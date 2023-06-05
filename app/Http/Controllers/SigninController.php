<?php

namespace App\Http\Controllers;

use App\Models\Menu;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Auth;

class SigninController extends Controller
{
    //
    public function index()
    {
        return view('layouts.register-signin.signin', [
            "title" => "Sign In",
            "active"=> "signin",
            "picture" => Menu::inRandomOrder()->pluck('menu_pics')->first()
        ]);
    }

    public function authenticate(Request $request)
    {
        $credential = $request->validate([
            'email' => 'required | email:dns',
            'password' => 'required'
        ]);

        if(Auth::attempt($credential))
        {
            $request->session()->regenerate();
            return redirect()->intended('/home');
        }

        return back()->with('failed', 'Login failed.');
    }

    public function logout(){
        Auth::logout();
        request()->session()->invalidate();
        request()->session()->regenerateToken();
        return redirect('/signin');
    }

}
