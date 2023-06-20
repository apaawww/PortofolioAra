<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfilController;
use App\Http\Controllers\PortofolioController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ContactController;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('login',function(){
    return view('login');
})->name('login');

Route::get('/',[HomeController::class,'show1']);
Route::get('profil',[HomeController::class,'show']);

Route::post('user/auth',[UserController::class,'auth']);
Route::get('user/logout',[UserController::class,'logout']);

Route::middleware('auth')->group(function(){
Route::get('/template',function(){
    return view ('template');
});



Route::get('setprofil',[ProfilController::class,'profil']);
Route::get('setprofil/add',[ProfilController::class,'add']);
Route::post('setprofil/create',[ProfilController::class,'create']);
Route::get('setprofil/edit/{id}',[ProfilController::class,'edit']);
Route::post('setprofil/update/{id}',[ProfilController::class,'update']);

Route::get('portofolio',[PortofolioController::class,'show']);
Route::get('portofolio/add',[PortofolioController::class,'add']);
Route::post('portofolio/create',[PortofolioController::class,'create']);
Route::get('portofolio/edit/{id}',[PortofolioController::class,'edit']);
Route::post('portofolio/update/{id}',[PortofolioController::class,'update']);
Route::get('portofolio/hapus/{id}',[PortofolioController::class,'hapus']);

Route::get('contact',[ContactController::class,'show']);
Route::get('contact/add',[ContactController::class,'add']);
Route::post('contact/create',[ContactController::class,'create']);
Route::get('contact/hapus/{id}',[ContactController::class,'hapus']);
});

