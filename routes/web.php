<?php

use App\Http\Controllers\MenuController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SigninController;
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
        "title" => "Home"
    ]);
});
Route::get('/menu', function () {
    return view('layouts.menu', [
        "title" => "Menu"
    ]);
});
Route::get('/favorite', function () {
    return view('layouts.favorite.favorite', [
        "title" => "Favorite"
    ]);
});
Route::get('/history', function () {
    return view('layouts.history.history', [
        "title" => "History"
    ]);
});
Route::get('/recipe', function () {
    return view('layouts.recipe.recipe', [
        "title" => "Recipe"
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

Route::get('/food', function () {
    return view('layouts.categories.food', [
        "title" => "Food"
    ]);
});
Route::get('/drink', function () {
    return view('layouts.categories.drink', [
        "title" => "Drink"
    ]);
});
// Route::get('/menu-details', function () {
//     return view('layouts.description.description', [
//         "title" => "Details"
//     ]);
// });

Route::get('/menu', [MenuController::class, 'index']);
Route::get('/menu-details', [MenuController::class, 'show']);

Route::get('/register', [RegisterController::class, 'index']);
Route::post('/register', [RegisterController::class, 'store']);

Route::get('/signin', [SigninController::class, 'index']);
Route::post('/signin', [SigninController::class, 'authenticate']);
