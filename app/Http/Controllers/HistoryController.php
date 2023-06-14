<?php

namespace App\Http\Controllers;

use App\Models\Menu;
use App\Models\History;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class HistoryController extends Controller
{
    public function index()
    {
        $histories = History::where('user_id', auth()->user()->id)
            ->pluck('menu_id')
            ->toArray();

        return view('layouts.history.history', [
            "title" => "History",
            "histories" => History::latest()->where('user_id', auth()->user()->id)->filter(request(['search']))->get()
        ]);
    }
}
