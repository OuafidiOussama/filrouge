<?php

use App\Http\Controllers\Pages;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\EventController;
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

// Route::get('/', function () {
//     return view('welcome');
// });


Route::get('/',[Pages::class, 'home']);
Route::get('/home',[Pages::class, 'home']);
Route::get('/shop',[Pages::class, 'shop']);
Route::get('/shop/product/{product}',[Pages::class, 'product']);
Route::get('/events',[Pages::class, 'events']);
Route::get('/hireus',[Pages::class, 'hireUs']);
Route::get('/profil',[Pages::class, 'profil']);

Route::get('/cart',[CartController::class, 'cart']);
Route::post('/addToCart',[CartController::class, 'addToCart']);
Route::get('/updateCart',[CartController::class, 'updateCart']);
Route::get('/deleteFromCart/{item}',[CartController::class, 'deleteFromCart'])->name('deleteFromCart');
Route::post('/checkout',[OrderController::class, 'checkOut']);


Route::get('/login',[UserController::class, 'login']);
Route::get('/logout',[UserController::class, 'logout']);
Route::post('/save',[UserController::class, 'save']);
Route::post('/check',[UserController::class, 'check']);
Route::get('/register',[UserController::class, 'register']);


Route::get('/admin',[AdminController::class, 'login']);
Route::post('/admin/check',[AdminController::class, 'admCheck']);
Route::get('/admin/logout',[AdminController::class, 'admLogout']);

Route::get('/admin/dash',[AdminController::class, 'dash']);

Route::get('/admin/products',[ProductController::class, 'products']);
Route::get('/admin/addProduct',[ProductController::class, 'addProduct']);
Route::post('/saveProduct',[ProductController::class, 'saveProduct']);
Route::get('/admin/editProduct/{product}',[ProductController::class, 'editProduct']);
Route::put('/updateProduct/{product}',[ProductController::class, 'updateProduct']);
Route::delete('/deleteProduct/{product}',[ProductController::class, 'deleteProduct']);

Route::get('/admin/categories',[CategoryController::class, 'categories']);
Route::get('/admin/addCategory',[CategoryController::class, 'addCategory']);
Route::post('/saveCategory',[CategoryController::class, 'saveCategory']);
Route::get('/admin/editCategory/{category}',[CategoryController::class, 'editCategory']);
Route::put('/updateCategory/{category}',[CategoryController::class, 'updateCategory']);
Route::delete('/deleteCategory/{category}',[CategoryController::class, 'deleteCategory']);






Route::get('/bookEvent/{event}',[EventController::class, 'bookEvent']);
Route::get('/admin/events',[EventController::class, 'events']);
Route::get('/admin/addEvent',[EventController::class, 'addEvent']);
Route::post('/saveEvent',[EventController::class, 'saveEvent']);
Route::get('/admin/editEvent/{event}',[EventController::class, 'editEvent']);
Route::put('/updateEvent/{event}',[EventController::class, 'updateEvent']);
Route::delete('/deleteEvent/{event}',[EventController::class, 'deleteEvent']);