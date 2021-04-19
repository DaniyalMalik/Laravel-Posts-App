<?php

use Illuminate\Support\Facades\Route;
// use App\Http\Controllers\PagesController;

Route::get('/', 'App\Http\Controllers\PagesController@index')->name('dashboard')->middleware('auth');

// Route::get('/', [PagesController::class, 'index']);
// Route::get('/about', [PagesController::class, 'about']);
// Route::get('/services', [PagesController::class, 'services']);

Route::get('/about', 'App\Http\Controllers\PagesController@about')->name('about');

Route::get('/services', 'App\Http\Controllers\PagesController@services')->name('services');

Route::get('/login', 'App\Http\Controllers\Auth\LoginController@index')->name('login');

Route::post('/login', 'App\Http\Controllers\Auth\LoginController@store');

// Route::get('/music', function(){
//     return 'There is no music here!';
// });

// Route::get('/', function () {
//     return view('/dashboard.php');
// });

// Route::get('/music/{var}', function($var){
//         return 'There is no music here!'.$var;
//     });

// Route::get('/music/{var1}/{var2}', function($var1, $var2){
//         return 'There is no music here!'.$var1.$var2;
//     });

Route::resource('register', 'App\Http\Controllers\Auth\RegisterController');

Route::resource('logout', 'App\Http\Controllers\Auth\LogoutController');

// Route::get('/register',[RegisterController::class, 'index'])->name('register');
// Route::post('/register',[RegisterController::class, 'index']);

Route::resource('posts', 'App\Http\Controllers\PostsController');

// Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
//     return view('dashboard');
// })->name('dashboard');
