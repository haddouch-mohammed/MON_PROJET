<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ConnexionController;
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


Route::get('/',[HomeController::class,'home'])->name('app_home');
Route::get('/about',[HomeController::class,'about'])->name('app_about');
Route::match(['get','post'],'/dashbord',[HomeController::class,'dashbord'])->name('app_dashbord');
/*Route::match(['get','post'],'/Connexion',[ConnexionController::class,'login'])->name('app_login');
Route::match(['get','post'],'/Inscription',[ConnexionController::class,'register'])->name('app_register');*/