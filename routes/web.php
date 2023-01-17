<?php

use App\Http\Controllers\ComputerController;
use Egulias\EmailValidator\Parser\Comment;
use Illuminate\Contracts\Cache\Store;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StaticController;

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
/* 1.we put the new controller insde[] 
   2. we call the demand function without '()' */
Route::get('/',[StaticController::class,'index'])->name('home.index');
Route::get('/about',[StaticController::class,'about'])->name('home.about');
Route::get('/contact',[StaticController::class,'contact'])->name('home.contact');

Route::resource('computers',ComputerController::class); 



