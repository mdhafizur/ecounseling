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
Auth::routes();
Route::get('/', function () {
    return view('home');
});

Route::get('/about', function () {
    return view('about');
});
Route::get('/contact', function () {
    return view('contact');
});

Route::get('/student', function () {
    return view('student');
});


Route::get('/messages', 'MessagesController@getMessages');

Route::post('/contact/submit', 'MessagesController@submit');

Route::match(['get', 'post'], '/botman', 'BotManController@handle');



Route::get('/login/admin', 'Auth\LoginController@showAdminLoginForm')->name('login.admin');


Route::post('/login/admin', 'Auth\LoginController@adminLogin');




Route::group(['middleware' => 'auth:admin'], function () {
    Route::view('/admin', 'admin');
});
