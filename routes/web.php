<?php

use App\Http\Controllers\Pages;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AdminController;
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
Route::get('/product',[Pages::class, 'product']);
Route::get('/events',[Pages::class, 'events']);
Route::get('/hireus',[Pages::class, 'hireUs']);
Route::get('/profil',[Pages::class, 'profil']);
Route::get('/login',[UserController::class, 'login']);
Route::get('/logout',[UserController::class, 'logout']);
Route::post('/save',[UserController::class, 'save']);
Route::post('/check',[UserController::class, 'check']);
Route::get('/register',[UserController::class, 'register']);


Route::get('/admin',[AdminController::class, 'login']);
Route::post('/admin/check',[AdminController::class, 'admCheck']);
Route::get('/admin/logout',[AdminController::class, 'admLogout']);

Route::get('/admin/dash',[AdminController::class, 'dash']);