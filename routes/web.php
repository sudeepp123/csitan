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
    Route::group(['prefix'=>'admin','middleware'=>'auth'],function(){

        Route::get('/event', function (){
            return view('event');
        });
        Route::get('/notice', function (){
            return view('notice');
        });
        Route::get('/general-member', function (){
            return view('general-member-add');
        });
        Route::get('/executive-member', function (){
            return view('executive-member');
        });

    });

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
