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
    'prefix'    => 'admin',
    'as'        => 'admin::',
    'namespace' => 'Admin',
], function () {
    Route::get('/', 'AdminController@index')->name('getHome');

    Route::get('actions', 'AdminController@getActions')->name('getActions');

    Route::get('groups', 'AdminController@getGroups')->name('getGroups');

    /*

    User manager released later
    Route::get('users', 'AdminController@getUsers')->name('getUsers');

    */

    Route::group([
        'prefix' => 'group/{name}',
        'as'     => 'group::',
    ], function ($name) {
        Route::get('/', function ($name) {
            return $name;
        })->name('getGroup');

        Route::group([
            'prefix' => 'permissions',
            'as'     => 'permissions::',
        ], function () {
            Route::get('/', 'GroupController@getPermissions')->name('getPermissions');
            Route::post('add', 'GroupController@postAdd')->name('postAdd');
            Route::get('edit', 'GroupController@getEdit')->name('getEdit');
            Route::patch('edit', 'GroupController@makeEdit')->name('makeEdit');
            Route::delete('delete', 'GroupController@deletePermission')->name('deletePermission');
        });
    });
});
