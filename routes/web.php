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
Route::get('/post', 'PostController@index');

Route::get('/view', 'PostController@view');




Route::get('/admin', 'AdminController@admin')    
    ->middleware('is_admin')    
    ->name('admin');

Route::get('/admin', 'BookuserController@index');
Route::get('post/carlinelist', 'PostController@carlinelist');

Route::get('/post/add', 'PostController@add');
Route::post('/post/add', 'PostController@create');

Route::get('/post/edit/{id}', 'PostController@edit');
Route::post('/post/edit/{id}', 'PostController@update');

Route::get('/post/delete/{id}', 'PostController@delete');

//test route
Route::get('/', 'PostController@userview');
Route::post('/', 'BookuserController@bookusercreate');

Route::get('/userview', 'PostController@userview');
Route::post('/userview', 'BookuserController@bookusercreate');
Route::get('/userview/completebook', 'BookuserController@completebooks');

Route::get('/userview/completebook/edit/{id}', 'BookuserController@edit');
Route::post('/userview/completebook/edit/{id}', 'BookuserController@update');

Route::get('/userview/completebook/delete/{id}', 'BookuserController@delete');



Auth::routes();

Route::get('/home', 'HomeController@index');
