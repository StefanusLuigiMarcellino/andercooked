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

    public function calories(){
        return redirect()->back();
    }

    public function fats(){
        return redirect()->back();
    }

    public function carbohydrates(){
        return redirect()->back();
    }

    public function protein(){
        return redirect()->back();
    }
}
