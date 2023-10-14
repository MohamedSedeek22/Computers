<?php

use App\Http\Controllers\ComputersController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FirstOne;

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

Route::get('/',[FirstOne::class,'index'] )-> name('home.index');
Route::get('/about',[FirstOne::class,'about'] )->name('home.about');
Route::resource('computers', ComputersController::class);
    
Route::get('/contact',[FirstOne::class,'contact'] )->name('home.contact');

Route::get('/store/{category?}/{item?}',[FirstOne::class,'category'] );
