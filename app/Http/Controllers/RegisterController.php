<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class RegisterController extends Controller
{
    //
    public function index()
    {
        return view('layouts.register-signin.register', [
            "title" => "Register",
            "active"=> "register"
        ]);
    }

    public function store(Request $request)
    {
        $validatedRegister = $request->validate([
            'username' => 'required | min:3 | max:255 | unique:users',
            'email' => 'required | email:dns | unique:users',
            'password' => 'required_with:confirm_password | regex:/[A-Z]/ | regex:/[a-z]/ | regex:/[0-9]/ | min:8 | max:255 | same:confirm_password',
            'confirm_password' => 'required',
            'checkbox' => 'accepted'
        ]);

        $validatedRegister['password'] = bcrypt($validatedRegister['password']);

        User::create($validatedRegister);
        $request->session()->flash('success', 'Registration successfull. Your account has been created.');
        return redirect('/signin');
    }
}
