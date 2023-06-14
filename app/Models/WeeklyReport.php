<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;
use App\Models\User;

class WeeklyReport extends Model{
    public function user(){
        return $this->belongsTo(User::class);
    }
}
