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

Route::get('/manage/project', 'Admin\ProjectsController@managePage')->name('adminProject');

Route::get('/manage/project/{id}', 'Admin\ProjectsController@getProject');

Route::post('/manage/project/edit', 'Admin\ProjectsController@edit')->name('editProject');

