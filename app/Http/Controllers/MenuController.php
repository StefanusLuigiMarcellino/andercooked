<?php

namespace App\Http\Controllers;

use App\Models\Menu;
use Illuminate\Http\Request;

class MenuController extends Controller
{
    public function index(){
        return view('layouts.categories.food', [
            "title" => "Menu",
            "menus" => Menu::latest()->filter(request(['category']))->get()
        ]);
    }

    public function show(Menu $menu){
        return view('layouts.categories.food', [
            "title" => "Details",
            "menu" => $menu
        ]);
    }
}
