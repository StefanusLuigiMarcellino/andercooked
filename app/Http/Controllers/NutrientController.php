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

    public function calories(Request $request){
        $user = $request->user();
        $number = $request->input('number');

        if($number < 0) {
            return redirect()->back()->withErrors('The input calorie cannot be less than zero.', 'calorieErrors');
        }

        switch ($request->input('action')) {
            case 'substract':
                if($user->total_calories - $request->number >= 0) {
                    $user->total_calories = $user->total_calories - $number;
                    $user->save();
                } else if($user->total_calories == 0) {
                    return redirect()->back()->withErrors('The total calorie count is already zero.', 'calorieErrors');
                } else {
                    return redirect()->back()->withErrors('The total calorie count cannot be less than zero.', 'calorieErrors');
                }

                return redirect()->back();
            case 'add':
                $user->total_calories = $user->total_calories + $number;
                $user->save();
                return redirect()->back();
        }
    }

    public function fats(Request $request){
        $user = $request->user();
        $number = $request->input('number');

        if($number < 0) {
            return redirect()->back()->withErrors('The input fat cannot be less than zero.', 'fatErrors');
        }

        switch ($request->input('action')) {
            case 'substract':
                if($user->total_fat - $request->number >= 0) {
                    $user->total_fat = $user->total_fat - $number;
                    $user->save();
                } else if($user->total_fat == 0) {
                    return redirect()->back()->withErrors('The total fat count is already zero.', 'fatErrors');
                } else {
                    return redirect()->back()->withErrors('The total fat count cannot be less than zero.', 'fatErrors');
                }

                return redirect()->back();
            case 'add':
                $user->total_fat = $user->total_fat + $number;
                $user->save();
                return redirect()->back();
        }
    }

    public function carbohydrates(Request $request){
        $user = $request->user();
        $number = $request->input('number');

        if($number < 0) {
            return redirect()->back()->withErrors('The input carbohydrate cannot be less than zero.', 'carbohydrateErrors');
        }

        switch ($request->input('action')) {
            case 'substract':
                if($user->total_carbohydrates - $request->number >= 0) {
                    $user->total_carbohydrates = $user->total_carbohydrates - $number;
                    $user->save();
                } else if($user->total_carbohydrates == 0) {
                    return redirect()->back()->withErrors('The total carbohydrate count is already zero.', 'carbohydrateErrors');
                } else {
                    return redirect()->back()->withErrors('The total carbohydrate count cannot be less than zero.', 'carbohydrateErrors');
                }

                return redirect()->back();
            case 'add':
                $user->total_carbohydrates = $user->total_carbohydrates + $number;
                $user->save();
                return redirect()->back();
        }
    }

    public function protein(Request $request){
        $user = $request->user();
        $number = $request->input('number');

        if($number < 0) {
            return redirect()->back()->withErrors('The input protein cannot be less than zero.', 'proteinErrors');
        }

        switch ($request->input('action')) {
            case 'substract':
                if($user->total_protein - $request->number >= 0) {
                    $user->total_protein = $user->total_protein - $number;
                    $user->save();
                } else if($user->total_protein == 0) {
                    return redirect()->back()->withErrors('The total protein count is already zero.', 'proteinErrors');
                } else {
                    return redirect()->back()->withErrors('The total protein count cannot be less than zero.', 'proteinErrors');
                }

                return redirect()->back();
            case 'add':
                $user->total_protein = $user->total_protein + $number;
                $user->save();
                return redirect()->back();
        }
    }
}
