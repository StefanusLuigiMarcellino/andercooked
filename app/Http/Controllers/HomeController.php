<?php

namespace App\Http\Controllers;

use App\Models\Menu;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        return view('layouts.home', [
            "title" => "Home",
            "user" => auth()->user(),
            "menus" => Menu::orderBy('total_of_likes', 'desc')->paginate(4)
        ]);
    }
}
