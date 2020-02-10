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
Route::get('/Jafsadmin','Admin\AdminHomeController@index');

Route::resource('employee','Admin\EmployeeController');
Route::resource('emptype','Admin\EmptypeController');
Route::resource('slider','Admin\SliderController');
Route::resource('project','Admin\ProjectController');