<?php

namespace App\Http\Controllers;

use App\Models\Menu;
use Illuminate\Http\Request;

class MenuController extends Controller
{
    public function index(){
        return view('layouts.menu.menu', [
            "title" => "Menu",
            "menus" => Menu::latest()->filter(request(['categories']))->get()
        ]);
    }

    public function show(Menu $menu){
        return view('layouts.description.description', [
            "title" => "Details",
            "menu" => $menu
        ]);
    }
}
