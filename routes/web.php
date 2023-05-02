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
Route::get('/menu-details', function () {
    return view('layouts.description.description', [
        "title" => "Details"
    ]);
});

Route::get('/register', function () {
    return view('layouts.register-signin.register', [
        "title" => "Register"
    ]);
});

Route::get('/signin ', function () {
    return view('layouts.register-signin.signin', [
        "title" => "Sign In"
    ]);
});
