<?php

namespace App\Models;
use App\Models\User;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Favorite extends Model
{
    use HasFactory;
    protected $guarded = ['id'];
    protected $with = ['menu'];

    public function scopeFilter($query, array $filters) {
        $query->when($filters['search'] ?? false, function($query, $search) {
            return $query->whereHas('menu', function($query) use ($search) {
                 $query->where('name', 'like', '%' . $search . '%')
                             ->orWhereHas('user', function($query) use ($search){
                                $query->where('username', 'like', '%'. $search . '%');
                             })
                             ->orWhere('description', 'like', '%' . $search . '%')
                             ->orWhere('ingredients', 'like', '%' . $search . '%');
             });
         });
    }

    public function user(){
        return $this->belongsTo(User::class, 'user_id');
    }

    public function menu(){
        return $this->belongsTo(Menu::class, 'menu_id');
    }
}
