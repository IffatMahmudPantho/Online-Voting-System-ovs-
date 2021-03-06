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

Route::get('/', 'PagesController@index');
Route::get('/register', 'PagesController@register');
Route::get('/login', 'PagesController@login');
Route::get('/admin.ovs', 'PagesController@admin');
Route::get('/user.ovs', 'PagesController@user');
Route::get('/createNewElection', 'PagesController@createNewElection');
Route::get('/adminLogin', 'PagesController@adminLogin');
Route::get('/successElection', 'PagesController@successElection');

Route::get('/successVote', 'PagesController@successVote');
Route::get('/result', 'PagesController@result');




