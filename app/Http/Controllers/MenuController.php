<?php

namespace App\Http\Controllers;

use App\Models\History;
use App\Models\Menu;
use App\Models\user;
use Ilebluminate\Http\Request;

class MenuController extends Controller
{
    public function index(){
        return view('layouts.menu.menu', [
            "title" => "Menu",
            "menus" => Menu::latest()->filter(request(['category', 'search']))->paginate(9)
        ]);
    }

    public function show(Menu $menu){
        return view('layouts.description.description', [
            "title" => "Details",
            "menu" => $menu
        ]);
    }

    public function history($id)
    {
        $userid = auth()->user()->id;
        $history = History::where('menu_id', $id)->where('user_id', $userid)->first();
        $user = user::find($userid);
        $menu = Menu::find($id);

        // Check if menu has not been seen before
        if(!$history){
            $histories = new History();
            $histories->user_id = $userid;
            $histories->menu_id = $id;
            $histories->save();
        }

        // update nutrient
        $user->total_calories += $menu->calories;
        $user->total_carbohydrates += $menu->carbohydrates;
        $user->total_fat += $menu->fat;
        $user->total_protein += $menu->protein;
        $user->save();

        return redirect('/history');
    }
}
