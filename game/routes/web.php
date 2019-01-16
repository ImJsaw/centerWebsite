<?php

use Illuminate\Support\Facades\Input;

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

Route::get('/','HomeController@home')->name('home');

Route::get('/home','HomeController@home')->name('home');

Route::get('/gd2016','HomeController@gd2016')->name('2016');

Route::get('/gd2017','HomeController@gd2017')->name('2017');

Route::get('/agenda','HomeController@agenda')->name('agenda');

Route::get('/rules','HomeController@rules')->name('rules');


Route::get('/login','HomeController@iflogin')->name('iflogin');
Route::post('/login', 'Auth\LoginController@login')->name('login');


// Functions for login user only
Route::group(['middleware'=>'auth'], function() {

    // redirect page base on user identity
    Route::get('/logged', 'LoggedController@loggedto');
    Route::post('/logged', 'DataController@upload');

    Route::get('/judge', 'LoggedController@tojudge');
    Route::get('/upload', 'LoggedController@toupload');

    Route::post('/fileupload', 'DataController@upload');
    Route::post('/modifiedpass' , 'DataController@modified_pass');

    /////下拉式選單需要修蓋(改)的地方//////////////////////////////////////////////////////


    Route::get('/{school}','DataController@selectpage');
    Route::post('/{school}', 'DataController@setscore');
    ////////////////////////////////////////////////////////////////////////////////////


    Route::get('/login/logout', 'Auth\LoginController@logout')->name('logout');

});

