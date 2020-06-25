<?php

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


Route::middleware('with-role:admin')->group(function () {
    
// admin controller
    Route::view('/admin', 'admins.index');
    Route::get('/users', 'UserController@index')->name('admins.users');
    Route::get('/users/{user_id}/approve', 'UserController@approve')->name('admins.users');
	//
});

// users controller
Route::middleware('with-role:user')->group(function () {

    //not approved users
    Route::get('/notapproved', 'HomeController@approval')->name('notapproved');
    // approved
    Route::middleware(['approved'])->group(function () {
    Route::get('/home', 'HomeController@index')->name('home');
    });  
   
});

Auth::routes();

Route::get('/logout', 'Auth\LoginController@logout');



