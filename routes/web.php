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

Route::get('/add/camp','CampController@addCamp')->name('addCamp');
Route::post('/save/user','CampController@saveCamp')->name('saveCamp');

Route::get('/edit/camp/{id}','CampController@editCamp')->name('editCamp');
Route::post('/update/camp/{id}','CampController@updateCamp')->name('updateCamp');

Route::post('/delete/camp/{id}','CampController@deleteCamp')->name('deleteCamp');

Route::post('/delete/user/{id}','UserController@deleteUser')->name('deleteUser');

Route::get('/users','UserController@users')->name('users');

Route::get('/camps','CampController@camps')->name('camps');

Route::get('/add/donation','DonationController@addDonation')->name('addDonation');
Route::post('/save/donation','DonationController@saveDonation')->name('saveDonation');

Route::get('/edit/donation/{id}','DonationController@editDonation')->name('editDonation');
Route::post('/update/donation/{id}','DonationController@updateDonation')->name('updateDonation');

Route::post('/delete/donation/{id}','DonationController@deleteDonation')->name('deleteDonation');

Route::post('/search/user','DonationController@searchUser')->name('searchUser');
