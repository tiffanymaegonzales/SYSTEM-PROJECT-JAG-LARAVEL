<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

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

Route::get('/welcome', function () {
    return view('welcome');
});

Route::get('/register',[HomeController::class,'register']);

Route::post('/register',[HomeController::class,'insertData']);

Route::get('/dashboard',[HomeController::class,'dashboard']);

Route::post('/dashboard',[HomeController::class,'inserData']);

Route::get('/login',[HomeController::class,'login']);

Route::post('/login',[HomeController::class,'displayData']);

Route::get('/product',[HomeController::class,'product']);

Route::get('/delete',[HomeController::class,'delete']);

Route::get('/result',[HomeController::class,'result']);

Route::get('/search',[HomeController::class,'search']);

Route::post('/result',[HomeController::class,'search']);

