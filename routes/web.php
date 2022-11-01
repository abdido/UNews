<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\HomeController;



Route::get('/', [HomeController::class, 'index'])->name('home');


// Route::get('login', 'AuthController@index')->name('login');
Route::get('login', [AuthController::class, 'index'])->name('login');
// Route::get('register', 'App\Http\Controllers\AuthController@register')->name('register');
// Route::post('proses_login', 'AuthController@proses_login')->name('proses_login');
Route::post('proses_login', [AuthController::class, 'proses_login'])->name('proses_login');
// Route::get('logout', 'AuthController@logout')->name('logout');
Route::get('logout', [AuthController::class, 'logout'])->name('logout');

Route::group(['middleware' => ['auth']], function () {
    Route::group(['middleware' => ['check_login:admin']], function () {
        Route::resource('admin', HomeController::class);
        // Route::get('/admin',[HomeController::class, 'index']);
    });
    Route::group(['middleware' => ['check_login:writer']], function () {
        Route::get('/',[HomeController::class, 'index']);
    });
    Route::group(['middleware' => ['check_login:reader']], function () {
        Route::get('/',[HomeController::class, 'index']);
    });
});
