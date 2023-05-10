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

        // Check if the user has already liked the post
        // if (!$user->likes()->where('post_id', $id)->exists()) {
            // Store the like in the database
            $favorites = new Favorite();
            $favorites->user_id = $user;
            $favorites->menu_id = $id;
            $favorites->save();

            // return response()->json(['message' => 'Liked successfully']);
        // }

        // return response()->json(['message' => 'You have already liked this post']);
    }

    public function index()
    {
        // $favorites = Favorite::all();
        // $menus = Menu::all();
        // foreach($favorites as $f) {
        //     if($f->user_id == auth()->user()->id) {
        //         $current_menu = $menus;
        //     }
        // }

        return view('layouts.favorite.favorite', [
            "title" => "Details",
            "menus" => Menu::vip()->get()
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
