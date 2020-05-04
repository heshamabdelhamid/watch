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

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

Route::get('/', function () {
    return view('welcome');
});

// Route::namespace('Dashboard')->prefix('admin')->group(function(){

//     Route::get('/','Home@index')->name('admin');

//     Route::resource('users', 'UserController')->except('show');
//     Route::resource('categories', 'CategoriesController')->except('show');
//     Route::resource('skills', 'SkilController')->except('show');
//     Route::resource('tags', 'TagController')->except('show');
//     Route::resource('pages', 'PageController')->except('show');


// });

Route::group(['prefix' => 'admin', 'namespace' => 'Dashboard'], function () {
    Route::get('/', 'Home@index')->name('admin');

    Route::resource('users', 'UserController')->except('show');
    Route::resource('categories', 'CategoriesController')->except('show');
    Route::resource('skills', 'SkilController')->except('show');
    Route::resource('tags', 'TagController')->except('show');
    Route::resource('pages', 'PageController')->except('show');
});

Auth::routes(['register' => false]);

Route::get('/home', 'HomeController@index')->name('home');
