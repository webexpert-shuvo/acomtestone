<?php

use Illuminate\Support\Facades\Auth;
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

    Route::get('/', function () {
        return view('welcome');
    });

   //  Auth::routes();
    // Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

    //User Email Test

    Route::get('/emailtest', [App\Http\Controllers\UserEmailTestController::class, 'index'] )->name('useremail');


    //Admin Login All Route


        Route::get('/admin/login', [App\Http\Controllers\AdminController::class, 'showAdminLoginForm'])->name('login.form');
        Route::get('/admin/register',[App\Http\Controllers\AdminController::class, 'showAdminRegisterForm'] )->name('register.form');
        Route::get('/admin/panel',[App\Http\Controllers\AdminController::class, 'adminpanel'])->name('admin.dashbord');
        Route::post('/admin/login', [App\Http\Controllers\Auth\LoginController::class, 'login'])->name('user.login');
        Route::post('/admin/logout', [App\Http\Controllers\Auth\LoginController::class, 'logout'])->name('user.logout');
        Route::post('/admin/register', [App\Http\Controllers\Auth\RegisterController::class, 'register'])->name('user.register');





