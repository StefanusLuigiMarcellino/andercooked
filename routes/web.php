<?php

use App\Models\Menu;
use Illuminate\Foundation\Auth\User;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MenuController;
use App\Http\Controllers\RecipeController;
use App\Http\Controllers\SigninController;
use App\Http\Controllers\HistoryController;
use App\Http\Controllers\FavoriteController;
use App\Http\Controllers\NutrientController;
use App\Http\Controllers\RegisterController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome', [
        "title" => "AnderCooked"
    ]);
});

// ini terjadi ketika user mengetik alamat yang invalid, kayak default site yang akan ditampilkan
Route::fallback(function () {
    return view('fallback', [
        "title" => "Page not found"
    ]);
});

Route::get('/home', function () {
    return view('layouts.home', [
        "title" => "Home",
        "user" => auth()->user(),
        "menus" => Menu::orderBy('total_of_likes', 'desc')->paginate(4)
    ]);
})->middleware('auth');

Route::get('/profile', function () {
    return view('layouts.profile.profile', [
        "title" => "Profile",
        "semi-white" => "TRUE",
        "user" => User::where('id', auth()->user()->id)->first()
    ]);
});

Route::get('/menu', [MenuController::class, 'index']);
Route::get('/menu-details/{menu:slug}', [MenuController::class, 'show']);

Route::get('/register', [RegisterController::class, 'index'])->middleware('guest');
Route::post('/register', [RegisterController::class, 'store']);

Route::get('/signin', [SigninController::class, 'index'])->middleware('guest')->name('login');
Route::post('/signin', [SigninController::class, 'authenticate']);

Route::post('/logout', [SigninController::class, 'logout']);

Route::get('/favorite', [FavoriteController::class, 'index']);
Route::post('/favorite/{menu:id}', [FavoriteController::class, 'like']);

Route::get('/history', [HistoryController::class, 'index']);
Route::post('/menu-details/{menu:id}', [MenuController::class, 'history']);

Route::get('/recipe', [RecipeController::class, 'show']);
// NOTES: ini yang bikin $curr nya error di recipe.blade.php (gara gara ada /recipe/ nya, kalo cuma /recipe aja aman)
Route::get('/recipe/{menu:slug}', [RecipeController::class, 'detail']);
Route::get('/add-recipe', [RecipeController::class, 'index']);
Route::post('/add-recipe', [RecipeController::class, 'store']);

Route::delete('/recipe/{menu:id}', [RecipeController::class, 'destroy']);

Route::get('add-nutrient', [NutrientController::class, 'index']);
Route::post('add-nutrient/calories', [NutrientController::class, 'calories']);
Route::post('add-nutrient/calories', [NutrientController::class, 'fats']);
Route::post('add-nutrient/calories', [NutrientController::class, 'carbohydrates']);
Route::post('add-nutrient/calories', [NutrientController::class, 'protein']);
