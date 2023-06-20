<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProfileController extends Controller
{
    public function store(Request $request){
        switch($request->input('action')){
            case 'save':
                $validatedData = $request->validate([
                    'name' => 'max:255'
                ]);
                $user = $request->user();
                $user->name = $validatedData['name'];
                $user->save();

                return redirect()->back();

            case 'cancel':
                return redirect('home');
        }
    }

    public function change(Request $request){
        $request['email'] = $request->user()->email;
        $credential = $request->validate([
            'current_password' => 'required',
            'new_password' => 'required_with:confirm_password|regex:/[A-Z]/|regex:/[a-z]/|regex:/[0-9]/|min:8|max:255|same:confirm_password',
            'confirm_password' => 'required',
        ]);
        if(Auth::attempt(['email' => $request['email'], 'password' => $credential['current_password']])){
            $credential['new_password'] = bcrypt($credential['new_password']);
            $user = $request->user();
            $user->password = $credential['new_password'];
            $user->save();

            return back()->with('success', 'Successfully Change Password!');
        }
        return back()->with('failed', 'Current Password is incorrect!');
    }
}
