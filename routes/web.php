<?php

use Illuminate\Support\Facades\Route;

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
Route::get('/profile', function () {
    return view('layouts.profile.profile', [
        "title" => "Profile"
    ]);
});

Route::get('/food', function () {
    return view('layouts.description.food-desc', [
        "title" => "Food"
    ]);
});

Route::get('/register', function () {
    return view('layouts.register-signin.register');
});
