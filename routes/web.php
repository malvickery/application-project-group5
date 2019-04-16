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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/logout', '\App\Http\Controllers\Auth\LoginController@logout');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/home/getEvents', 'HomeController@show');
Route::get('/profile', 'ProfileController@index')->name('profile');

//Route::get('/student/create', 'StudentController@create')->name('student');
//Route::resource('student-info', 'StudentInfoController');
Route::get('/student-info/create', 'StudentInfoController@create');
Route::post('/student-info', 'StudentInfoController@store');

Route::get('/instructor-info/create', 'InstructorInfoController@create');
Route::post('/instructor-info', 'InstructorInfoController@store');
Route::post('/instructor-info', 'InstructorInfoController@store');

Route::get('/contact/{id}', 'UpdateContactController@edit');
Route::post('/contact/{id}', 'UpdateContactController@update');

Route::get('/calendar/create', 'CalendarController@create');
Route::post('/calendar/addEvent', 'CalendarController@store');
Route::get('/calendar/getEvents', 'CalendarController@show');
Route::post('/calendar/deleteEvent', 'CalendarController@destroy');

Route::get('/admin-view/list-students', 'ViewStudentsController@index');
