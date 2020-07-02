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
Auth::routes();

Route::get('/logout', 'Auth\LoginController@logout');

// wrap the routes
Route::group(['middleware' => ['auth']], function() {

//routes available to all users
Route::get('/churchannouncements', 'ChurchAnnouncementController@index');
Route::view('/developers', 'support');
// Route::get('/devotions', 'DevotionController@index');
Route::livewire('/devotions', 'devotion');





// admin middlewware
Route::middleware('with-role:admin')->group(function () {

// admin controller
Route::view('/admin', 'admins.index');
Route::get('/users', 'UserController@index')->name('admins.users');
Route::get('/users/{user_id}/approve', 'UserController@approve')->name('admins.users');

// Route::get('/announcements', 'AnnouncementController@index')->name('announcements.index');
Route::post('/announcements', 'AnnouncementController@store')->name('announcements.index');
Route::patch('/announcements/{id}', 'AnnouncementController@update');
Route::livewire('/announcements', 'announce');



}); //end admimn

// users controller
Route::middleware('with-role:user')->group(function () {

//not approved users

Route::get('/notapproved', 'HomeController@approval')->name('notapproved');
// approved
Route::middleware(['approved'])->group(function () {
Route::get('/home', 'HomeController@index')->name('home');


    });  
   
});

});


// end wrapping
