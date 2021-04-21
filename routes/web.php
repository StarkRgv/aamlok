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


Auth::routes();

Route::get('/', [App\Http\Controllers\Controller::class, 'index'])->name('index');


Route::get('/home', [App\Http\Controllers\DashboardController::class, 'index'])->name('home');
Route::get('/logout', [App\Http\Controllers\HomeController::class, 'logout'])->name('logout');

// Listing
Route::get('/listing', [App\Http\Controllers\ListingController::class, 'openListing'])->name('listing');

// Details Page
Route::get('/details/{product?}', [App\Http\Controllers\DetailsController::class, 'openDetails'])->name('details');

// Product
Route::get('/product', [App\Http\Controllers\ProductController::class, 'openAddProduct'])->name('product');
Route::post('/store/product', [App\Http\Controllers\ProductController::class, 'storeProduct'])->name('store.product');
Route::get('/edit-product/{product?}', [App\Http\Controllers\ProductController::class, 'openEditProduct'])->name('edit.product');
Route::post('/update/product/{product?}', [App\Http\Controllers\ProductController::class, 'updateProduct'])->name('update.product');
Route::get('/active-product', [App\Http\Controllers\ProductController::class, 'openActiveProductList'])->name('active.product');
Route::get('/retired-product', [App\Http\Controllers\ProductController::class, 'openRetiredProductList'])->name('retired.product');
Route::get('/product-details/{product?}', [App\Http\Controllers\ProductController::class, 'openProductDetails'])->name('product.detail');
Route::post('/product/status/{product?}', [App\Http\Controllers\ProductController::class, 'statusProduct'])->name('status.product');

// Product-Variation
Route::get('/product-variation/{product?}', [App\Http\Controllers\ProductVariationController::class, 'openProductVariation'])->name('product.variation');
Route::post('/store/variation', [App\Http\Controllers\ProductVariationController::class, 'addVariaton'])->name('store.variation');
Route::post('/update/variation/{variation?}', [App\Http\Controllers\ProductVariationController::class, 'updateVariaton'])->name('update.variation');
Route::post('/destroy/variation/{variation?}', [App\Http\Controllers\ProductVariationController::class, 'destroyVariation'])->name('destroy.variation');
Route::post('/variation/status/{variation?}', [App\Http\Controllers\ProductVariationController::class, 'statusVariation'])->name('status.variation');

// Product-Images
Route::get('/product-images/{product?}', [App\Http\Controllers\ProductImageController::class, 'openProductImage'])->name('product.image');
Route::post('/store/variation/images/{product?}', [App\Http\Controllers\ProductImageController::class, 'storeVariationImages'])->name('store.variaion.images');
Route::get('/destroy/image/{image?}', [App\Http\Controllers\ProductImageController::class, 'destroyImage'])->name('destroy.image');


// CategoryProductVariationController
Route::resource('category', 'App\Http\Controllers\CategoryController', ['only' => [ 'index', 'store', 'update' ,'destroy']]);

// Sub-Category
Route::resource('sub-category', 'App\Http\Controllers\SubCategoryController', ['only' => [ 'index', 'store', 'update' ,'destroy' ]]);

// Gender
Route::resource('gender', 'App\Http\Controllers\GenderController', ['only' => [ 'index', 'store', 'update' ,'destroy' ]]);

// Brand
Route::resource('brand', 'App\Http\Controllers\BrandController', ['only' => [ 'index', 'store', 'update' ,'destroy']]);

// Color
Route::resource('color', 'App\Http\Controllers\ColorsController', ['only' => [ 'index', 'store', 'update' ,'destroy']]);

// Size
Route::resource('size', 'App\Http\Controllers\SizeController', ['only' => [ 'index', 'store', 'update' ,'destroy']]);

// Search
Route::get('/search', [App\Http\Controllers\SearchController::class, 'search'])->name('search');
Route::get('/search-price', [App\Http\Controllers\SearchController::class, 'searchByPrice'])->name('search.price');
