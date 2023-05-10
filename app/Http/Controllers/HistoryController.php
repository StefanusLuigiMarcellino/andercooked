<?php

namespace App\Http\Controllers;

use App\Models\History;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class HistoryController extends Controller
{
    public function history($id)
    {
        // $user = User::user();

        // Check if the user has already liked the post
        // if (!$user->likes()->where('post_id', $id)->exists()) {
            // Store the like in the database
            $histories = new History();
            $histories->user_id = 2;
            $histories->menu_id = $id;;
            $histories->save();

            return response()->json(['message' => 'Liked successfully']);
        // }

        // return response()->json(['message' => 'You have already liked this post']);
    }
}
