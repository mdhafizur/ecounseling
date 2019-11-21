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







Route::post('/contact/submit', 'MessagesController@submit');

Route::match(['get', 'post'], '/botman', 'BotManController@handle');



Route::get('/login/admin', 'Auth\LoginController@showAdminLoginForm')->name('login.admin');


Route::post('/login/admin', 'Auth\LoginController@adminLogin');




Route::group(['middleware' => 'auth:admin'], function () {
    Route::view('/admin', 'admin');
    Route::get('/messages', 'MessagesController@getMessages');
});


Route::get('/register/student', 'Auth\RegisterController@showStudentRegisterForm');
Route::post('/register/student', 'Auth\RegisterController@createStudent');


Route::get('/login/student', 'Auth\LoginController@showStudentLoginForm')->name('login.student');
Route::post('/login/student', 'Auth\LoginController@studentLogin');

Route::group(['middleware' => 'auth:student'], function () {
    Route::view('/student', 'student');
    Route::get('student/profile', ['uses' => 'ProfilesController@indexStudent', 'as' => 'student.profile']);
    Route::post('student/profile/update', ['uses' => 'ProfilesController@updateStudent', 'as' => 'student.profile.update']);
    Route::resource('appointments', 'AppointmentsController');
    Route::get('/createAppointment', 'AppointmentsController@create');
});



Route::get('/register/counselor', 'Auth\RegisterController@showCounselorRegisterForm');
Route::post('/register/counselor', 'Auth\RegisterController@createCounselor');

Route::get('/login/counselor', 'Auth\LoginController@showCounselorLoginForm')->name('login.counselor');
Route::post('/login/counselor', 'Auth\LoginController@counselorLogin');


Route::group(['middleware' => 'auth:counselor'], function () {
    Route::view('/counselor', 'counselor');
    Route::get('counselor/profile', ['uses' => 'ProfilesController@indexCounselor', 'as' => 'counselor.profile']);
    Route::post('counselor/profile/update', ['uses' => 'ProfilesController@updateCounselor', 'as' => 'counselor.profile.update']);
    Route::get('/appointedStudents', 'AppointmentsController@appointedStudents');
    Route::delete('/appointments/{appointment}', 'AppointmentsController@destroy');
});
Route::get('/viewCprofile', 'ProfilesController@getCprofiles');

Route::get('/approval', 'ProfilesController@index');
Route::get('status/{id}', 'ProfilesController@status')->name('status');
Route::get('pdf/{id}', 'ProfilesController@pdf')->name('pdf');


Route::delete('/approval/{counselor}', 'ProfilesController@approvalDestroy');
