<?php

use App\Http\Controllers\publicController;
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

Route::get('/', function () {
    return view('welcome');
});

// Route::get('/about', [publicController::class, 'getAbout'])->name('about');
// Route::get('/contact', [publicController::class, 'getContact'])->name('contact');
// Route::get('/terms', [publicController::class, 'getTerms'])->name('terms');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/{page}', publicController::class)
->name('page')
->where('page', 'about|contact|terms');