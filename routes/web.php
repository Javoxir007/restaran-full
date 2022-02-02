<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\Admin\OrderController;
use App\Http\Controllers\Admin\ReservationController;
use App\Http\Controllers\Admin\ContactController;
use App\Http\Controllers\Admin\AuthorController;
use App\Http\Controllers\Admin\BlogController;
use App\Http\Controllers\Admin\ChefController;

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


/* Category */
Route::get('admin/category', [CategoryController::class, 'index'])
    ->name('admin/category/index')
    ->middleware('user-role');
Route::get('admin/category/create', [CategoryController::class, 'create'])
    ->name('admin/category/create')
    ->middleware('user-role');
Route::post('admin/category/store', [CategoryController::class, 'store'])
    ->name('admin/category/store')
    ->middleware('user-role');    
Route::get('admin/category/{id}/edit', [CategoryController::class, 'edit'])
    ->name('admin/category/edit')
    ->middleware('user-role');
Route::patch('admin/category/{id}', [CategoryController::class, 'update'])
    ->name('admin/category/update')
    ->middleware('user-role');
Route::delete('admin/category/{id}', [CategoryController::class, 'destroy'])
    ->name('admin/category/destroy')
    ->middleware('user-role');



/* Product */
Route::get('admin/product', [ProductController::class, 'index'])
    ->name('admin/product/index')
    ->middleware('user-role');
Route::get('admin/product/create', [ProductController::class, 'create'])
    ->name('admin/product/create')
    ->middleware('user-role');
Route::post('admin/product/store', [ProductController::class, 'store'])
    ->name('admin/product/store')
    ->middleware('user-role');
Route::get('admin/product/{id}/edit', [ProductController::class, 'edit'])
    ->name('admin/product/edit')
    ->middleware('user-role');
Route::patch('admin/product/{id}', [ProductController::class, 'update'])
    ->name('admin/product/update')
    ->middleware('user-role');
Route::delete('admin/product/{id}', [ProductController::class, 'destroy'])
    ->name('admin/product/destroy')
    ->middleware('user-role');




/* Orders */
Route::get('admin/orders', [OrderController::class, 'index'])
    ->name('admin/orders/index')
    ->middleware('user-role');
Route::get('admin/orders/create', [OrderController::class, 'create'])
    ->name('admin/orders/create')
    ->middleware('user-role');
Route::get('admin/orders/{id}/edit', [OrderController::class, 'edit'])
    ->name('admin/orders/edit')
    ->middleware('user-role');



/* Reservation */
Route::get('admin/reservation', [ReservationController::class, 'index'])
    ->name('admin/reservation/index')
    ->middleware('user-role');
Route::post('admin/reservation/store', [ReservationController::class, 'store'])
    ->name('admin/reservation/store');
Route::delete('admin/reservation/{id}', [ReservationController::class, 'destroy'])
    ->name('admin/reservation/destroy')
    ->middleware('user-role');



/* Contact */
Route::get('admin/contact', [ContactController::class, 'index'])
    ->name('admin/contact/index')
    ->middleware('user-role');
Route::post('admin/contact/store', [ContactController::class, 'store'])
    ->name('admin/contact/store');
Route::delete('admin/contact/{id}', [ContactController::class, 'destroy'])
    ->name('admin/contact/destroy')
    ->middleware('user-role');



/* Author */
Route::get('admin/author', [AuthorController::class, 'index'])
    ->name('admin/author/index')
    ->middleware('user-role');
Route::get('admin/author/create', [AuthorController::class, 'create'])
    ->name('admin/author/create')
    ->middleware('user-role');
Route::post('admin/author/store', [AuthorController::class, 'store'])
    ->name('admin/author/store')
    ->middleware('user-role');    
Route::get('admin/author/{id}/edit', [AuthorController::class, 'edit'])
    ->name('admin/author/edit')
    ->middleware('user-role');
Route::patch('admin/author/{id}', [AuthorController::class, 'update'])
    ->name('admin/author/update')
    ->middleware('user-role');
Route::delete('admin/author/{id}', [AuthorController::class, 'destroy'])
    ->name('admin/author/destroy')
    ->middleware('user-role');




/* Blogs */
Route::get('admin/blogs', [BlogController::class, 'index'])
    ->name('admin/blogs/index')
    ->middleware('user-role');
Route::get('admin/blogs/create', [BlogController::class, 'create'])
    ->name('admin/blogs/create')
    ->middleware('user-role');
Route::post('admin/blogs/store', [BlogController::class, 'store'])
    ->name('admin/blogs/store')
    ->middleware('user-role');
Route::get('admin/blogs/{id}/edit', [BlogController::class, 'edit'])
    ->name('admin/blogs/edit')
    ->middleware('user-role');
Route::patch('admin/blogs/{id}', [BlogController::class, 'update'])
    ->name('admin/blogs/update')
    ->middleware('user-role');
Route::delete('admin/blogs/{id}', [BlogController::class, 'destroy'])
    ->name('admin/blogs/destroy')
    ->middleware('user-role');




/* Chefs */
Route::get('admin/chefs', [ChefController::class, 'index'])
    ->name('admin/chefs/index')
    ->middleware('user-role');
Route::get('admin/chefs/create', [ChefController::class, 'create'])
    ->name('admin/chefs/create')
    ->middleware('user-role');
Route::get('admin/chefs/store', [ChefController::class, 'store'])
    ->name('admin/chefs/store')
    ->middleware('user-role');
Route::get('admin/chefs/{id}/edit', [ChefController::class, 'edit'])
    ->name('admin/chefs/edit')
    ->middleware('user-role');
Route::patch('admin/chefs/{id}', [ChefController::class, 'update'])
    ->name('admin/chefs/update')
    ->middleware('user-role');
Route::delete('admin/chefs/{id}', [ChefController::class, 'destroy'])
    ->name('admin/chefs/destroy')
    ->middleware('user-role');


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])
    ->middleware('user-role')
    ->name('home');
Route::get('/director', function () {echo auth()->user()->name;})
    ->middleware('user-role:director');

