<?php

use App\Http\Controllers\AuthenticationControllerBasic;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

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




Route::group(['middleware'=>'guest'],function(){
    Route::get('/',[AuthenticationControllerBasic::class,'loginPageShow'])->name('login');
    Route::post('/attempt/login',[AuthenticationControllerBasic::class,'loginAttempt'])->name('login.check');
});

Route::group(['middleware'=>'auth'],function(){
    Route::post('/logout',[AuthenticationControllerBasic::class,'logOut'])->name('logout');
    Route::get('/dashboard', [HomeController::class,'Index'])->name('dashboard');
});
