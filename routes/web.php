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

Route::get('/', 'LoginController@index');
Route::post('/','LoginController@auth');
Route::get('/signup', 'SignupController@index');
Route::post('/signup','SignupController@create');
Route::get("/logout", 'LogoutController@logout');
Route::get('/forgotpass','ForgotpassController@index');
Route::post('/forgotpass','ForgotpassController@change');
Route::group(['prefix' => '/dashboard', 'middleware' => 'authuser'], function(){
  Route::get("/", 'DashboardController@index');
  Route::post('/','DashboardController@updatecontent')->middleware('adminonly');
  Route::group(['prefix'=>'/gameslist'], function(){
    Route::get("/","DashboardController@gameslist");
    Route::get('/monogatari/{game}','MonogatariController@index')->where(['game' =>'sachi|henrik']);
  });
  Route::group(['prefix'=>'/lessons'], function(){
    Route::get("/", "DashboardController@lessons");
    Route::any("/add","LessonsController@add")->middleware('adminonly');
    Route::any("/edit/{id}","LessonsController@edit")->where(['id'=>'[0-9]+'])->middleware('adminonly');
    Route::post("/delete","LessonsController@delete")->middleware('adminonly');
  });
  Route::get("/documentation", "DashboardController@documentation");
  Route::group(['prefix'=> '/accounts_admin','middleware' => 'adminonly'], function(){
    Route::get("/", "DashboardController@accounts");
    Route::any("/add", "AccountsController@add");
    Route::any("/edit/{id}", "AccountsController@edit")->where(['id'=>'[0-9]+']);
    Route::post("/delete", "AccountsController@delete");
  });
  Route::any('/editprofile/{id}', 'ProfileController@edit');

}); 
