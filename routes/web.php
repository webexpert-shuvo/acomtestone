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

    // Auth::routes();
    // Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

    //User Email Test

    Route::get('/emailtest', [App\Http\Controllers\UserEmailTestController::class, 'index'] )->name('useremail');


    //Admin Login All Route

    Route::group(['namespace'   => 'App\Http\Controllers'], function(){

        Route::get('/admin/login', 'AdminController@showAdminLoginForm')->name('login.form');
        Route::get('/admin/register', 'AdminController@showAdminRegisterForm')->name('register.form');
        Route::get('/admin/panel','AdminController@adminpanel')->name('admin.dashbord');

    });



