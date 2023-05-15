<?php

use App\Models\Menu;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LikeController;
use App\Http\Controllers\MenuController;
use App\Http\Controllers\SigninController;
use App\Http\Controllers\FavoriteController;
use App\Http\Controllers\HistoryController;
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

// nanti semua di masukin di AnderCookedController.php

Route::get('/', function () {
    return view('piechart.pie-chart-google');
});

// ini terjadi ketika user mengetik alamat yang invalid, kayak default site yang akan ditampilkan
Route::fallback(function () {
    return view('fallback');
});

Route::get('/home', function () {
    return view('layouts.home', [
        "title" => "Home",
        "menus" => Menu::latest()->filter(request(['category', 'search']))->paginate(10)
    ]);
})->middleware('auth');

Route::get('/history', function () {
    return view('layouts.history.history', [
        "title" => "History"
    ]);
});
Route::get('/recipe', function () {
    return view('layouts.recipe.recipe', [
        "title" => "Recipe",
        "menus" => Menu::latest()->filter(request(['category', 'search']))->paginate(10)
    ]);
});
Route::get('/add-recipe', function () {
    return view('layouts.recipe.add-recipe', [
        "title" => "Add Recipe"
    ]);
});

Route::get('/profile', function () {
    return view('layouts.profile.profile', [
        "title" => "Profile",
        "semi-white" => "TRUE"
    ]);
});

Route::get('/menu', [MenuController::class, 'index']);
Route::get('/menu-details/{menu:slug}', [MenuController::class, 'show']);
// Route::get('/menu-details', [MenuController::class, 'show']);

Route::get('/register', [RegisterController::class, 'index'])->middleware('guest');
Route::post('/register', [RegisterController::class, 'store']);

Route::get('/signin', [SigninController::class, 'index'])->middleware('guest');
Route::post('/signin', [SigninController::class, 'authenticate']);

Route::get('/favorite', [FavoriteController::class, 'index']);
Route::post('/favorite/{menu:id}', [FavoriteController::class, 'like'])->name('post.like');

Route::get('/history', [HistoryController::class, 'index']);
Route::post('/history/{menu:id}', [HistoryController::class, 'history'])->name('post.like');
