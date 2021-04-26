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
    return redirect()->intended('dashboard');
});

Auth::routes();

Route::get('/dashboard', 'HomeController@index')->name('home');
Route::get('/user/trash', 'UsersController@trash')->name('user.trash');
Route::get('/customer/trash', 'CustomersController@trash')->name('customer.trash');
Route::get('/device/trash', 'CustomersController@trash')->name('device.trash');
Route::resource('/user', 'UsersController');
Route::resource('/customer', 'CustomersController');
Route::resource('/device', 'CustomersController');
