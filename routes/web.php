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

Route::get('/', function(){
    return redirect('/home');
});
Route::get('create_blog', 'BlogController@create');
Route::post('/post_blog', 'BlogController@store');
Route::get('contact_us', 'SendMailController@create');
Route::post('/send_mail', 'SendMailController@send');

Auth::routes();
Route::get('/home', 'BlogController@index');
