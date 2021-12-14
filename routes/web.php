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

Route::get('/', function() {
    return redirect(route('login'));
});
Route::get('/starter', function() {
    return view('starter');
});

Auth::routes(['verify' => false, 'reset' => false]);

Route::middleware('auth')->group(function() {
    Route::get('/dashboard', 'DashboardController@index')->name('dashboard');
});

Route::get('/faculty', 'FacultyController@index')->name('facultyList');
Route::get('/faculty/create', 'FacultyController@create')->name('facultyForm');
Route::post('/faculty/create', 'FacultyController@store')->name('facultySave');
Route::get('/faculty/edit/{faculty}', 'FacultyController@edit')->name('facultyEdit');
Route::post('/faculty/edit/{faculty}', 'FacultyController@update')->name('facultyUpdate');
Route::get('/faculty/delete/{faculty}', 'FacultyController@destroy')->name('facultyDelete');