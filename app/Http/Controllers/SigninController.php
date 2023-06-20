<?php

namespace App\Http\Controllers;

use App\Models\Menu;
use App\Models\WeeklyReport;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;

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
            'email' => 'required|email:dns',
            'password' => 'required'
        ]);

        if(Auth::attempt($credential))
        {
            $today = Carbon::now();
            $user = $request->user();
            $data = WeeklyReport::where('user_id', $user->id)->exists();

            if(!$data){
                $variable1 = new WeeklyReport();
                $variable1->user_id = $user->id;
                $variable1->weekdays = 0;
                $variable1->weeklycalories = $user->total_calories;
                $variable1->weeklycarbohydrat = $user->total_carbohydrates;
                $variable1->weeklyfat = $user->total_fat;
                $variable1->weeklyprotein = $user->total_protein;
                $variable1->save();
            }elseif($data){
                $lastWeek = WeeklyReport::where('user_id', $user->id)
                ->orderBy('weekdays', 'desc')->first();

                $numDiff = $today->diffInDays($lastWeek->created_at);
                if($numDiff >=7 ){
                    $variable2 = new WeeklyReport();
                    $variable2->user_id = $user->id;
                    $variable2->weekdays = $lastWeek->weekdays + 1;
                    $variable2->weeklycalories = $user->total_calories;
                    $variable2->weeklycarbohydrat = $user->total_carbohydrates;
                    $variable2->weeklyfat = $user->total_fat;
                    $variable2->weeklyprotein = $user->total_protein;
                    $variable2->save();

                    $user->total_calories = 0;
                    $user->total_carbohydrates = 0;
                    $user->total_fat = 0;
                    $user->total_protein = 0;
                    $user->save();
                }
            }
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
