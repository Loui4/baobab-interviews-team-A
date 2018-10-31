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

Route::get('/', function () {
    return view('welcome');
});
Route::Resource('paste', 'PasteController');

//Route::post('paste/store','PasteController@store')->name('paste.store');

Auth::routes();

Route::get('/home', 'PasteController@index')->name('home');

Route::get('/dashboard', function () {
    return view('dashboard');
});
Route::get('/paste', 'PasteController@index');
Route::get('/create','PasteController@create');
Route::get('/send','PasteController@sendMail');
Route::get('sendbasicemail','MailController@basic_email');
Route::get('sendhtmlemail','MailController@html_email');
Route::get('sendattachmentemail','MailController@attachment_email');