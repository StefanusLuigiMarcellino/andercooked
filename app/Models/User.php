<?php

namespace App\Models;


use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
// use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;
    protected $guarded = ['id'];
    protected $attributes = [
        'total_calories' => 0,
        'total_carbohydrates' => 0,
        'total_protein' => 0,
        'total_fat' => 0
    ];

    public function menu(){
        return $this->hasMany(Menu::class);
    }

    public function history(){
        return $this->hasMany(History::class);
    }

    public function favorite(){
        return $this->hasMany(Favorite::class);
    }
}
