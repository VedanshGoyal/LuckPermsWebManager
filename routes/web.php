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
    return view('guest.home');
});

Auth::routes();

Route::group([
    'prefix' => 'admin',
    'as' => 'admin::',
    'namespace' => 'Admin'
], function() {
    Route::get('/', 'AdminController@index')->name('home');

    Route::get('actions', 'AdminController@getActions')->name('actions');

    /*
        /actions
        /groups
        /group/name
        /users
        /user/name
    */
});

//Route::get('/home', 'HomeController@index');
