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

Auth::routes();

Route::group(['middleware' => 'auth'], function () {
    Route::get('/home', function () {
        return view('home');
    });

    Route::get('/', function () {
        return redirect('/home');
    });

    Route::resource('companies', 'CompaniesController', ['except' => ['show']]);
    Route::resource('employees', 'EmployeesController', ['except' => ['show']]);
    Route::get('/original-list', 'OriginalListController@index')->name('original-list.index');;
});
