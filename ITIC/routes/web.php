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


//////Project////
Route::get('/manage/project', 'Admin\ProjectsController@managePage')->name('adminProject');

Route::get('/manage/project/{id}', 'Admin\ProjectsController@getProject');

Route::post('/manage/project/edit', 'Admin\ProjectsController@edit')->name('editProject');
////////


//Member///////////////////////////////////////////////////
Route::get('/backmember', 'MembersController@member');

Route::get('/addmember', function () {
    return view('member.memberadd');
});

Route::post('/uploadmember', 'MembersController@add');
Route::get('/deletemember/{id}', 'MembersController@delete');

Route::get('/modifymember/{id}', 'MembersController@modify');
Route::post('/checkmember/{id}', 'MembersController@modify_check');
///////////////////////////////////////////////////////////////
