<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Favorite extends Model
{
    use HasFactory;
    protected $guarded = ['id'];

    public function users(){
        return $this->belongsTo(User::class, 'user_id');
    }

    public function menus(){
        return $this->belongsTo(Menu::class, 'menu_id');
    }
}