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


Route::get('/create-todo', 'TodoController@show');
Route::post('/create-todo', 'TodoController@store')->name('create');
Route::get('/all-todo','TodoController@showAll')->name('all');

Route::get('/project/{id}', 'TodoController@showList');

Route::patch('/project/list/save/{id}', 'TodoController@updateList');
Route::post('/project/list/save/', 'TodoController@storeList');