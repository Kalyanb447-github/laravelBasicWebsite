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

// Route::get('/', function () {
//     return view('home');
// });

// Route::get('/about', function () {
//     return view('about');
// });

// Route::get('/contact', function () {
//     return view('contact');
// });
Route::get('/',array('as'=>'home', 'uses'=>'PagesController@getHome'));
Route::get('/about',array('as'=>'messages', 'uses'=>'PagesController@getAbout'));
Route::get('/contact',array('as'=>'messages', 'uses'=>'PagesController@getContact'));
Route::post('/contact/submit',array('as'=>'messages/submit', 'uses'=>'MessagesController@submit'));

Route::get('/messages',array('as'=>'messages', 'uses'=>'MessagesController@getMEssages'));


