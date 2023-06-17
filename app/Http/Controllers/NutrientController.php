<?php

namespace App\Http\Controllers;

use App\Models\WeeklyReport;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Symfony\Component\HttpFoundation\Session\Session;

class NutrientController extends Controller
{
    public function index(){
        return view('add-nutrient', [
            "title" => "User Nutrient",
            "reports" => WeeklyReport::where('user_id', auth()->user()->id)->latest()->orderBy('weekdays', 'asc')->take(4)->get(),
            "user" => auth()->user()
        ]);
    }

    // Add
    public function calories(Request $request){
        $user = $request->user();
        $user->total_calories = $user->total_calories + 1;
        $user->save();

        return redirect()->back();
    }

    public function fats(Request $request){
        $user = $request->user();
        $user->total_fat = $user->total_fat + 1;
        $user->save();

        return redirect()->back();
    }

    public function carbohydrates(Request $request){
        $user = $request->user();
        $user->total_carbohydrates = $user->total_carbohydrates + 1;
        $user->save();

        return redirect()->back();
    }

    public function protein(Request $request){
        $user = $request->user();
        $user->total_protein = $user->total_protein + 1;
        $user->save();

        return redirect()->back();
    }

    // Substract 
    public function caloriesSubs(Request $request){
        $user = $request->user();

        if($user->total_calories > 0) {
            $user->total_calories = $user->total_calories - 1;
            $user->save();
        } else {
            return redirect()->back()->withErrors('Your total calories is already zero.', 'calorieErrors');
        }

        return redirect()->back();
    }

    public function fatsSubs(Request $request){
        $user = $request->user();

        if($user->total_fat > 0) {
            $user->total_fat = $user->total_fat - 1;
            $user->save();
        } else {
            return redirect()->back()->withErrors('Your total fats is already zero.', 'fatErrors');
        }

        return redirect()->back();
    }

    public function carbohydratesSubs(Request $request){
        $user = $request->user();

        if($user->total_carbohydrates > 0) {
            $user->total_carbohydrates = $user->total_carbohydrates - 1;
            $user->save();
        } else {
            return redirect()->back()->withErrors('Your total carbohydrates is already zero.', 'carbohydrateErros');
        }

        return redirect()->back();
    }

    public function proteinSubs(Request $request){
        $user = $request->user();

        if($user->total_protein > 0) {
            $user->total_protein = $user->total_protein - 1;
            $user->save();
        } else {
            return redirect()->back()->withErrors('Your total proteins is already zero.', 'proteinErrors');
        }

        return redirect()->back();
    }
}
