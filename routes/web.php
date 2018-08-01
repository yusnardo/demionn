<?php

Route::get('/', 'HomeController@index')->name('home');

Auth::routes();

Route::get('auth/activate', 'Auth\ActivationController@activate')->name('auth.activate');

Route::get('/home', 'HomeController@index');

Route::get('/course', 'CourseController@index')->name('course');;

Route::get('/dasbor', 'DasborController@index');

Route::get('logout', '\App\Http\Controllers\Auth\LoginController@logout');

Route::get('auth/activate/resend', 'Auth\ActivationResendController@showResendForm')->name('auth.activate.resend');

Route::post('auth/activate/resend', 'Auth\ActivationResendController@resend');

Route::get('profile/{user}', 'ProfileController@index');

Route::patch('profile/update-information', 'ProfileController@updateProfile');

Route::post('profile/update-password', 'ProfileController@updatePassword');

Route::get('/card', 'CardController@index');

Route::get('/checkout', 'CheckoutController@index');

Route::patch('course/order', 'CourseController@payment');

Route::get('/card-1', function () {
    return view('cards.card-1');
});

Route::get('/about', 'AboutController@index');


