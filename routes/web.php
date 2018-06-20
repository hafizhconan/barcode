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
Route::resource('createdata','CreateDataController');
Route::resource('absensi','AbsensiController');
Route::resource('list','ListController');
Route::resource('acc','AccController');
// Route::resource('testing','testing');
Auth::routes();

Route::get('/home', 'CreateDataController@index');
Route::get('sendbasicemail','MailController@basic_email');
Route::get('sendhtmlemail','MailController@html_email');
Route::get('sendattachmentemail','MailController@attachment_email');
Route::get('testing', ['as' => 'testing.index', 'uses' => 'testingcontroller@index']);
Route::get('/test', 'TestController@index');
Route::get('/acc/{name}','CreateDataController@destroyAll');
Route::post('acc', 'CreateDataController@validateCredentials');
