<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;

class WeeklyReport extends Model{
    public function user(){
        return $this->belongsTo(User::class);
    }
}
    // Retrieve data from the submission
    // $userId = auth()->user()->id;
    // $date = now()->startOfWeek()->toDateString(); // Assuming the week starts on Sunday
    // $weeklyCalories = $request->input('weekly_calories');
    // $weeklyCarbs = $request->input('weekly_carbs');
    // $weeklyFat = $request->input('weekly_fat');
    // $weeklyProtein = $request->input('weekly_protein');

    // Store the data in the database
    // $weeklyReport = new WeeklyReport([
    //     'user_id' => $userId,
    //     'date' => $date,
    //     'weekly_calories' => $weeklyCalories,
    //     'weekly_carbs' => $weeklyCarbs,
    //     'weekly_fat' => $weeklyFat,
    //     'weekly_protein' => $weeklyProtein,
    // ]);
    // $weeklyReport->save();
