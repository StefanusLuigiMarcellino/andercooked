<?php

namespace App\Http\Controllers;

use App\Models\Menu;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use App\Models\Favorite;

class FavoriteController extends Controller
{
    public function like($id)
    {
        $user = auth()->user()->id;
        // $menu = Menu::whereIn('id', $id);
        $curr = Favorite::where('menu_id', $id)->exists();

        // Check if the user has already liked the post
        if (!$curr) {
            // Store the like in the database
            $favorites = new Favorite();
            $favorites->user_id = $user;
            $favorites->menu_id = $id;
            $favorites->save();
            // $favorites->menu_id->total_of_likes = $favorites->menu_id->total_of_likes + 1;
            // return response()->json(['message' => 'Liked successfully']);
        } else {
            dd("ELSe");
        }

            // return response()->json(['message' => 'Liked successfully']);
        // }

        // return response()->json(['message' => 'You have already liked this post']);
        return redirect()->back();
    }

    public function index()
    {
        $favorites = Favorite::where('user_id', auth()->user()->id)->pluck('menu_id')->toArray();

        return view('layouts.favorite.favorite', [
            "title" => "Favorite",
            "menus" => Menu::latest()->whereIn('id', $favorites)->get()
        ]);
    }
}

// <?php

// namespace App\Http\Controllers;

// use App\Models\Menu;
// use App\Models\User;
// use Illuminate\Http\Request;
// use Illuminate\Routing\Controller;
// use App\Models\Favorite;

// class FavoriteController extends Controller
// {
//     public function like($id)
//     {
//         $user = User::user();

//         // Check if the user has already liked the post
//         if (!$user->likes()->where('post_id', $id)->exists()) {
//             // Store the like in the database
//             $favorites = new Favorite();
//             $favorites->user_id = $user->id;
//             $favorites->menu_id = $id;
//             $favorites->save();

//             return response()->json(['message' => 'Liked successfully']);
//         }

//         return response()->json(['message' => 'You have already liked this post']);
//     }
// }
