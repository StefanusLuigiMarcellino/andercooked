<?php

namespace App\Http\Controllers;

use App\Models\Menu;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use App\Models\Favorite;

class FavoriteController extends Controller
{
    public function like($id)
    {
        $user = auth()->user()->id;
        $menu = Menu::where('id', $id)->first();
        $curr = Favorite::where('menu_id', $id)->where('user_id', $user)->first();

        // Check if the user has already liked the post
        if (!$curr) {
            $favorites = new Favorite();
            $favorites->user_id = $user;
            $favorites->menu_id = $id;
            $favorites->save();
            $menu->total_of_likes = $menu->total_of_likes + 1;
            $menu->save();
        } else {
            $curr->delete();
            $menu->total_of_likes = $menu->total_of_likes - 1;
            $menu->save();
            return back();
        }
        return redirect()->back();
    }
    public function index()
    {
        return view('layouts.favorite.favorite', [
            "title" => "Favorite",
            "favorites" => Favorite::latest()->where('user_id', auth()->user()->id)->filter(request(['search']))->get()
        ]);
    }
}
