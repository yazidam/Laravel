<?php

use Illuminate\Support\Facades\Route;
use \App\Http\Controllers\ProductController;
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
Route::get('/product',[ProductController::class,'index']

)->name('product');
Route::delete('/delete/{id}',[ProductController::class,'destroy'])->name('delete');

Route::get('/create', [ProductController::class,'create']);
//action f add blade
Route::post('/ajout', [ProductController::class,'store'])->name('ajout');

Route::get('/details/{id}',[ProductController::class,'details']

)->name('details');


Route::get('/show/{id}',[ProductController::class,'show']

)->name('show');


Route::post('/update/{id}',[ProductController::class,'update']

)->name('update');
//Route::resource('/product', ProductController::class);
