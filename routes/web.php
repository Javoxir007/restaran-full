<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;

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

Route::get('/', [PageController::class, 'index']);
Route::get('about', [PageController::class, 'about']);
Route::get('blog', [PageController::class, 'blog']);
Route::get('blogFull', [PageController::class, 'blogFull']);
Route::get('contact', [PageController::class, 'contact']);
Route::get('reservation', [PageController::class, 'reservation']);
Route::get('menu', [PageController::class, 'menu']);
Route::get('shopDetailes', [PageController::class, 'shopDetailes']);
Route::get('cart', [PageController::class, 'cart']);
Route::get('teamChefs', [PageController::class, 'teamChefs']);
Route::get('checkout', [PageController::class, 'checkout']);
Route::get('notPage', [PageController::class, 'notPage']);
Route::get('faqs', [PageController::class, 'faqs']);


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
