<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

  Route::group(['prefix' => 'admin', 'middleware' => 'auth'], function () {

        Route::resource('/qruplar','GroupController');
        Route::resource('/fenler','SciencesController');
        Route::resource('/movzular','SubjectsController');
        Route::resource('/istifadechiler','SiteUsersController');
        Route::resource('/suallar','QuestionsController');

        Route::get('/ajax/group/{id}', 'HomeController@ajaxGroup');
        Route::get('/ajax/science/{id}', 'HomeController@ajaxScience');

    });

Route::get('/admin', 'HomeController@index');
Route::get('/home', 'HomeController@index');
