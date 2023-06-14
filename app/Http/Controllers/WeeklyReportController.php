<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\user;
use app\Models\WeeklyReport;

class WeeklyReportController extends Controller{
    public function weeklyreport(){
        $user = user::find($userid)
        $nutrient = weeklyreport::class,

        // update nutrient
        $userid->weeklycalories = $userid->total_calories;
        $nutrient->weeklycarbohydrat = $userid->total_carbohydrates;
        $nutrient->weeklyfat = $userid->total_fat;
        $nutrient->weeklyprotein = $userid->total_protein;
        $nutrient->save();
    }
}
