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
    return redirect('/login');
});

Auth::routes(['verify'=>true]);

Route::get('/home', 'HomeController@index')->name('home')->middleware('verified');

Route::get('/profile','UserController@viewProfile')->name('profile');
Route::post('/editProfile/{id}','UserController@editProfile')->name('editProfile');
Route::get('/blood','UserController@newBloodGroup')->name('bloodGroup');
Route::post('/blood','UserController@saveBloodGroup')->name('saveBloodGroup');
Route::post('/edit/blood/{id}','UserController@editBloodGroup')->name('editBloodGroup');
Route::post('/delete/blood/{id}','UserController@deleteBloodGroup')->name('deleteBloodGroup');

Route::get('/add/user','UserController@addUser')->name('addUser');
Route::get('/edit/user/{id}','UserController@editUser')->name('editUser');
Route::post('/update/user/{id}','UserController@updateUser')->name('updateUser');

Route::get('/add/camp','CampController@addCamp')->name('addCamp');
Route::post('/save/camp','CampController@saveCamp')->name('saveCamp');

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

Route::get('/donations','DonationController@donations')->name('donations');

Route::get('/add/request','RequestController@addRequest')->name('addRequest');
Route::post('/save/request','RequestController@saveRequest')->name('saveRequest');

Route::get('/edit/request/{id}','RequestController@editRequest')->name('editRequest');
Route::post('/update/request/{id}','RequestController@updateRequest')->name('updateRequest');

Route::post('/delete/request/{id}','RequestController@deleteRquest')->name('deleteRequest');
Route::get('/requests','RequestController@requests')->name('requests');

Route::get('/readNotifications',"HomeController@readNotifications")->name('readNotifications');

Route::get('/confirm/donation/{id}','DonationController@confirmDonation')->name('confirmDonation');
Route::get('/confirm/request/{id}','RequestController@confirmRequest')->name('confirmRequest');
Route::post('/save/user','UserController@saveUser')->name('saveUser');
Route::get('email/resend','Auth\VerificationController@resend')->name('verification.resend');


//new branch
