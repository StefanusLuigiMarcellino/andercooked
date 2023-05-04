<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Menu extends Model
{
    use HasFactory;
    protected $guarded = ['id'];
    protected $with = ['category'];

    public function scopeFilter($query, array $filters) {
        $query->when($filters['category'] ?? false, function($query, $category){
            return $query->whereHas('category', function($query) use ($category){
                $query->where('category', $category);
            });
        });
    }

    public function users(){
        return $this->belongsTo(User::class, 'user_id');
    }

    public function category(){
        return $this->belongsTo(Category::class, 'category_id');
    }

    public function histories(){
        return $this->hasMany(History::class);
    }

    public function favorites(){
        return $this->hasMany(Favorite::class);
    }
}
