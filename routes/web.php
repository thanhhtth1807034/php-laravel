<?php

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

Route::get('/account/login', 'AccountController@login');

Route::post('/account/login', 'AccountController@select');

Route::get('/account/register', 'AccountController@register');

Route::post('/account/register', 'AccountController@processRegister');

Route::get('/account/list', 'AccountController@getAllAccount');

Route::get('/account/account-detail/{id}', 'AccountController@getAccountById');

Route::resource('/game', 'GameController');


