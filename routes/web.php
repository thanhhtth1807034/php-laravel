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


Route::get('/account/login', 'AccountController@login') ->name('login') ;



Route::get('/account/register', 'AccountController@register');

Route::get('/account/menu', 'AccountController@menu');

Route::post('/account/register', 'AccountController@processRegister');

Route::get('/account/list', 'AccountController@getAllAccount');

Route::get('/account/account-detail/{id}', 'AccountController@getAccountById');

//Route::resource('/game', 'GameController');

Route::get('/account/form', 'AccountController@form');
Route::get('/account/display', 'AccountController@display');
Route::post('/account/save', 'AccountController@save');
Route::put('/account/lammoi', 'AccountController@lammoi');
Route::get('/account/sua', 'AccountController@sua');
//Route::resource('/game', ['as' => 'game', 'uses' => 'GameController']);

