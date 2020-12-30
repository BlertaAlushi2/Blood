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

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/profile','UserController@viewProfile')->name('profile');
Route::post('/editProfile/{id}','UserController@editProfile')->name('editProfile');
Route::get('/blood','UserController@newBloodGroup')->name('bloodGroup');
Route::post('/blood','UserController@saveBloodGroup')->name('saveBloodGroup');
Route::post('/edit/blood/{id}','UserController@editBloodGroup')->name('editBloodGroup');
Route::post('/delete/blood/{id}','UserController@deleteBloodGroup')->name('deleteBloodGroup');

Route::get('/add/user','UserController@addUser')->name('addUser');
Route::post('/save/user','UserController@saveUser')->name('saveUser');

Route::get('/edit/user/{id}','UserController@editUser')->name('editUser');
Route::post('/update/user/{id}','UserController@updateUser')->name('updateUser');

Route::post('/delete/user/{id}','UserController@deleteUser')->name('deleteUser');

Route::get('/users','UserController@users')->name('users');

