<?php

namespace App\Http\Controllers;

use App\Models\History;
use App\Models\Menu;
use App\Models\Category;
use App\Models\Favorite;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class RecipeController extends Controller
{
    public function show(){
        $user = auth()->user()->id;
        $menu = Menu::where('user_id', $user)->latest()->filter(request(['category', 'search']))->paginate(10);
        return view('layouts.recipe.recipe', [
            "title" => "Recipe",
            "menus" => $menu,
            "curr" =>  $menu->first()
        ]);
    }

    // NOTES: ini yang bikin $curr nya error di recipe.blade.php
    public function detail($slug){
        $user = auth()->user()->id;
        $menu = Menu::where('user_id', $user)->latest()->filter(request(['category', 'search']))->paginate(10);
        $curr = Menu::where('user_id', $user)->where('slug', $slug)->first();
        return view('layouts.recipe.recipe',  [
            "title" => "Recipe",
            "menus" => $menu,
            "curr" =>  $curr
        ]);
    }

    public function index(){
        return view('layouts.recipe.add-recipe', [
            "title" => "Add Recipe",
            "categories" => Category::all()
        ]);
    }

    public function store(Request $request){
    switch($request->input('action')){
        case 'add':
            $validateData = $request->validate([
                'name' => 'required|max:255',
                'description' => 'required',
                'menu_pics' => 'required|image|file|max:4096',
                'ingredients' => 'required',
                'cooking_steps' => 'required',
                'calories' => 'required|numeric',
                'carbohydrates' => 'required|numeric',
                'fat' => 'required|numeric',
                'protein' => 'required|numeric',
            ]);

            $validateData['user_id'] = auth()->user()->id;
            $validateData['menu_pics'] = '/storage/' . $request->file('menu_pics')->store('menu-pics');
            $validateData['published_at'] = date("Y-m-d");
            $validateData['total_of_likes'] = 0;
            $validateData['category_id'] = 1;

            Menu::create($validateData);
            return redirect('recipe');

        case 'cancel':
            return redirect('recipe');
    }
    }

    public function destroy($id){
        $menu = Menu::findOrFail($id);
        $favorite = Favorite::where('menu_id', $id);
        $history = History::where('menu_id', $id);
        Storage::delete($menu->menu_pics);
        $menu->delete();
        $favorite->delete();
        $history->delete();

        return redirect('/recipe');
    }
}
