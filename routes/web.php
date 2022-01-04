<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;

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

Route::get('/redirect',[HomeController::class,'redirect']);

Route::get('/',[HomeController::class,'index']);

Route::get('/products',[AdminController::class,'products']);

Route::post('/uplodeproduct',[AdminController::class,'uplodeproduct']);

Route::get('/showproducts',[AdminController::class,'showproducts']);

Route::get('/deleteproduct/{id}',[AdminController::class,'deleteproduct']);

Route::get('/updateproduct/{id}',[AdminController::class,'updateproduct']);

Route::post('/updateview/{id}',[AdminController::class,'updateview']);

Route::get('/search',[HomeController::class,'search']);

Route::post('/addcart/{id}',[HomeController::class,'addcart']);

Route::get('/showcart',[HomeController::class,'showcart']);

Route::get('/delete/{id}',[HomeController::class,'delete']);

Route::post('/order',[HomeController::class,'confirmorder']);

Route::get('/customerorder',[AdminController::class,'customerorder']);

Route::get('/updatestatus/{id}',[AdminController::class,'updatestatus']);

Route::get('/deleteorder/{id}',[AdminController::class,'deleteorder']);

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');


