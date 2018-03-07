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
Route::get('/','PostsController@index')->name('home');
Route::get('/posts/create','PostsController@create');
Route::get('/posts/{id}','PostsController@show');
Route::post('/posts','PostsController@store');
Route::post('/posts/{post}/comments','CommentsController@store');
Route::get('/posts/tags/{tag}','TagsController@index');


// 注册
Route::get('/register','RegistrationController@create');
Route::post('/register','RegistrationController@store');
// 登录
Route::get('/login','SessionsController@create')->name('login');
Route::post('/login','SessionsController@store');
Route::get('/logout','SessionsController@destroy');


