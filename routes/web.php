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
Route::prefix('/dashboard')->group(function(){
	Route::get("/", 'DashboardController@index');
	Route::post('/','DashboardController@updatecontent');
	Route::get("/gameslist", "DashboardController@gameslist");
	Route::prefix("/lessons")->group(function(){
		Route::get("/", "DashboardController@lessons");
		Route::any("/add","LessonsController@add");
		Route::any("/edit/{id}","LessonsController@edit")->where(['id'=>'[0-9]+']);
		Route::post("/delete/{id}","LessonsController@delete")->where(['id'=>'[0-9]+']);
	});
	Route::get("/documentation", "DashboardController@documentation");
	Route::prefix("/accounts_admin")->group(function(){
		Route::get("/", "DashboardController@accounts");
		Route::any("/edit/{id}", "AccountsController@edit")->where(['id'=>'[0-9]+']);
		Route::post("/delete/{id}", "AccountsController@delete")->where(['id'=>'[0-9]+']);
	});
});	
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
