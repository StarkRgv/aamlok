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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\DashboardController::class, 'index'])->name('home');
Route::get('/logout', [App\Http\Controllers\HomeController::class, 'logout'])->name('logout');

// Listing
Route::get('/listing', [App\Http\Controllers\ListingController::class, 'openListing'])->name('listing');

// Details Page
Route::get('/details/{product?}', [App\Http\Controllers\DetailsController::class, 'openDetails'])->name('details');

// Product
Route::get('/product', [App\Http\Controllers\ProductController::class, 'openAddProduct'])->name('product');
Route::post('/store/product', [App\Http\Controllers\ProductController::class, 'storeProduct'])->name('store.product');
Route::get('/product-list', [App\Http\Controllers\ProductController::class, 'openProductList'])->name('product.list');
Route::get('/product-details/{product?}', [App\Http\Controllers\ProductController::class, 'openProductDetails'])->name('product.detail');

// Category
Route::resource('category', 'App\Http\Controllers\CategoryController', ['only' => [ 'index', 'store' ]]);

// Sub-Category
Route::resource('sub-category', 'App\Http\Controllers\SubCategoryController', ['only' => [ 'index', 'store' ]]);
