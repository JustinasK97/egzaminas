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
    return view('home');
});

Auth::routes();

Route::get('/', 'HomeController@index');
Route::get('/home/', 'AccountsController@createAccount');
Route::get('/summary/', 'AccountsController@summary');
Route::get('/newtransfer/', 'OperationsController@newTransfer');
Route::get('/transfers/', 'OperationController@transfers');
