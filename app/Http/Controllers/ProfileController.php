<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class ProfileController extends Controller
{
    public function index(){
        return view('layouts.profile.profile', [
            "title" => "Profile",
            "semi-white" => "TRUE",
            "user" => User::where('id', auth()->user()->id)->first()
        ]);
    }


    public function store(Request $request){
        switch($request->input('action')){
            case 'save':
                $validateData = $request->validate([
                    'name' => 'max:255',
                    'profile_pics' => 'image|file|max:4096',
                    'oldimage' => ''
                ]);
                $user = $request->user();
                if('/storage/'.$request->profile_pics){
                    // destroy
                    if($request->oldimage != '/profile/profile-pics.png'){
                        Storage::delete($request->oldimage);
                    }
                    $validateData['profile_pics'] = '/storage/'.$request->file('profile_pics')->store('profile');
                }else{
                    $validateData['profile_pics'] = $request->oldimage;
                }
                // dd($validateData);
                $user->name = $validateData['name'];
                $user->profile_picture = $validateData['profile_pics'];
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
