<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class NutrientController extends Controller
{
    public function index(){
        return view('add-nutrient', [
            "title" => "User Nutrient",
            "user" => auth()->user()
        ]);
    }

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
}
