<?php

Route::get('/', 'HomeController@index')->name('home');

Auth::routes();

Route::get('auth/activate', 'Auth\ActivationController@activate')->name('auth.activate');

Route::get('/home', 'HomeController@index');

Route::get('/course', 'CourseController@index')->name('course');;

Route::get('/dasbor', 'DasborController@index');

Route::get('/profile', 'ProfileController@index');

Route::get('logout', '\App\Http\Controllers\Auth\LoginController@logout');

Route::get('auth/activate/resend', 'Auth\ActivationResendController@showResendForm')->name('auth.activate.resend');

Route::post('auth/activate/resend', 'Auth\ActivationResendController@resend');

// Route::get('/changePassword','ProfileController@showChangePasswordForm');

