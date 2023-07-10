<?php

use App\Http\Controllers\CobaController;
use App\Models\Menu;
use Illuminate\Foundation\Auth\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\MenuController;
use App\Http\Controllers\RecipeController;
use App\Http\Controllers\SigninController;
use App\Http\Controllers\HistoryController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\FavoriteController;
use App\Http\Controllers\NutrientController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\WeeklyReportController;

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

Route::get('/home', [HomeController::class, 'index'])->middleware('auth');

Route::get('/menu', [MenuController::class, 'index'])->middleware('auth');
Route::get('/menu-details/{menu:slug}', [MenuController::class, 'show'])->middleware('auth');

Route::get('/register', [RegisterController::class, 'index'])->middleware('guest');
Route::post('/register', [RegisterController::class, 'store']);

Route::get('/signin', [SigninController::class, 'index'])->middleware('guest')->name('login');
Route::post('/signin', [SigninController::class, 'authenticate']);

// Auth::routes();
Route::get('/auth/google', [SigninController::class, 'redirectGoogle']);
Route::get('/auth/google/callback', [SigninController::class, 'handleCallback']);

Route::post('/logout', [SigninController::class, 'logout']);

Route::get('/favorite', [FavoriteController::class, 'index'])->middleware('auth');
Route::post('/favorite/{menu:id}', [FavoriteController::class, 'like'])->middleware('auth');

Route::get('/history', [HistoryController::class, 'index'])->middleware('auth');
Route::post('/menu-details/{menu:id}', [MenuController::class, 'history'])->middleware('auth');

Route::get('/recipe', [RecipeController::class, 'show'])->middleware('auth');
Route::get('/recipe/{menu:slug}', [RecipeController::class, 'detail'])->middleware('auth');

Route::get('/add-recipe', [RecipeController::class, 'index'])->middleware('auth');
Route::post('/add-recipe', [RecipeController::class, 'store'])->middleware('auth');

Route::delete('/recipe/{menu:id}', [RecipeController::class, 'destroy'])->middleware('auth');

Route::get('add-nutrient', [NutrientController::class, 'index'])->middleware('auth');
Route::post('add-nutrient/calories', [NutrientController::class, 'calories'])->middleware('auth');
Route::post('add-nutrient/fats', [NutrientController::class, 'fats'])->middleware('auth');
Route::post('add-nutrient/carbohydrates', [NutrientController::class, 'carbohydrates'])->middleware('auth');
Route::post('add-nutrient/protein', [NutrientController::class, 'protein'])->middleware('auth');

Route::get('testing', [WeeklyReportController::class,'testing'])->middleware('auth');

Route::get('/weekly-report', [WeeklyReportController::class, 'index'])->name('weekly-data.index')->middleware('auth');
Route::post('/weekly-report', [WeeklyReportController::class, 'store'])->name('weekly-data.store')->middleware('auth');

Route::get('/profile', [ProfileController::class, 'index'])->middleware('auth');
Route::post('/profile/update', [ProfileController::class, 'store'])->middleware('auth');
Route::post('/profile/change', [ProfileController::class, 'change'])->middleware('auth');


