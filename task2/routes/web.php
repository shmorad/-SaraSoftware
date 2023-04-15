<?php

use App\Http\Controllers\BookingController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\MessageController;
use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
// Fontend
Route::get('/about', function () {
    return view('fontend.about');
});
// home
Route::get('/',[HomeController::class,'index'])->name('home');
// products
Route::get('/home/product',[HomeController::class,'products'])->name('product.home');
// contact
Route::get('/contact',[ContactController::class,'contact'])->name('contact');
Route::post('/contact/store',[ContactController::class,'contact_store'])->name('contact.store');

// admin 
Route::get('/admin', function () {
    return view('dashboard');
});
// Category

Route::get('/category',[CategoryController::class,'category'])->name('category');
Route::post('/category/store',[CategoryController::class,'category_store'])->name('category.store');
Route::get('/category/delete/{id}',[CategoryController::class,'category_delete'])->name('category.delete');
Route::get('/category/edit/{id}',[CategoryController::class,'category_edit'])->name('category.edit');
Route::post('/category/update',[CategoryController::class,'category_update'])->name('category.update');


// product
Route::get('/product',[ProductController::class,'product'])->name('product');
Route::post('/product/store',[ProductController::class,'product_store'])->name('product.store');
Route::get('/product/delete/{id}',[ProductController::class,'product_delete'])->name('product.delete');
Route::get('/product/edit/{id}',[ProductController::class,'product_edit'])->name('product.edit');
Route::post('/product/update',[ProductController::class,'product_update'])->name('product.update');
// Message
Route::get('/message',[MessageController::class,'message'])->name('message');
Route::get('/message/delete/{id}',[MessageController::class,'message_delete'])->name('message.delete');

// booking
Route::get('/booking/{id}',[BookingController::class,'booking'])->name('booking');
