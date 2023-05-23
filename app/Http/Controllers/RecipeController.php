<?php

namespace App\Http\Controllers;

use App\Models\Menu;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class RecipeController extends Controller
{
    public function index(){
        return view('layouts.recipe.add-recipe', [
            "title" => "Add Recipe",
            "categories" => Category::all()
        ]);
    }

    public function store(Request $request){
        $validateData = $request->validate([
            'menu_name' => 'required|max:255',
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
        $validateData['menu_pics'] = $request->file('menu_pics')->store('menu-pics');
        $validateData['published_at'] = date("Y-m-d");
        $validateData['total_of_likes'] = 0;
        $validateData['category_id'] = 1;

        Menu::create($validateData);
        return redirect('/recipe');
    }

    public function destroy($id){
        $Menu = Menu::findOrFail($id);
        Storage::delete($Menu->menu_pics);

        $Menu->delete();
        return redirect('/recipe');
    }
}
