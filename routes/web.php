<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\bookcontroller;

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

Route::get('/',[bookcontroller::class,'index'])->name('home');
Route::get('/about',[bookcontroller::class,'about'])->name('about');
Route::get('/contact',[bookcontroller::class,'contact'])->name('contact');
Route::get('/store',[bookcontroller::class,'store'])->name('store');
Route::post('/store',[bookcontroller::class,'storebook'])->name('store');
Route::get('/view',[bookcontroller::class,'view'])->name('view');
Route::get('/del/{id}',[bookcontroller::class,'del'])->name('del');
Route::get('/edit/{id}',[bookcontroller::class,'edit'])->name('edit');
Route::post('/update/{id}',[bookcontroller::class,'update'])->name('update');
