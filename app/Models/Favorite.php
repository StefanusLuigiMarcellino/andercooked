<?php

namespace App\Models;
use App\Models\User;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Favorite extends Model
{
    use HasFactory;
    protected $guarded = ['id'];

    public function scopeVip($query){
        dd($query->where('user_id', '==', auth()->user()->id));
        return $query->where('user_id', '==', auth()->user()->id);
    }

    public function user(){
        return $this->belongsTo(User::class, 'user_id');
    }

    public function menu(){
        return $this->belongsTo(Menu::class, 'menu_id');
    }
    
}
