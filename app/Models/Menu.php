<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Menu extends Model
{
    use HasFactory;
    protected $guarded = ['id'];
    protected $with = ['categories'];

    public function scopeFilter($query, array $filters) {
        $query->when($filters['categories'] ?? false, function($query, $categories){
            return $query->whereHas('categories', function($query) use ($categories){
                $query->where('slug', $categories);
            });
        });
    }

    public function users(){
        return $this->belongsTo(User::class, 'user_id');
    }

    public function categories(){
        return $this->belongsTo(Category::class, 'category_id');
    }

    public function histories(){
        return $this->hasMany(History::class);
    }

    public function favorites(){
        return $this->hasMany(Favorite::class);
    }
}
