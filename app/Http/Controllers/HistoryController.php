<?php

namespace App\Http\Controllers;

use App\Models\Menu;
use App\Models\History;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class HistoryController extends Controller
{
    public function history($id)
    {
        $user = auth()->user()->id;
        // $menu = Menu::whereIn('id', $id);

        // Check if the user has already liked the post
        // if (!$user->likes()->where('post_id', $id)->exists()) {
            // Store the like in the database
            $histories = new History();
            $histories->user_id = $user;
            $histories->menu_id = $id;
            $histories->save();
            // $menu->total_of_likes = $menu->total_of_likes + 1;
            // dd($menu);

            // return response()->json(['message' => 'Liked successfully']);
        // }

        // return response()->json(['message' => 'You have already liked this post']);

        // return redirect()->back();
    }

    public function index()
    {
        $histories = History::where('user_id', auth()->user()->id)
            ->pluck('menu_id')
            ->toArray();

        return view('layouts.history.history', [
            "title" => "History",
            "menus" => Menu::whereIn('id', $histories)->get()
        ]);
    }
}
