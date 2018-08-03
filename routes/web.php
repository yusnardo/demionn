<?php
Route::get('/', function()
{
    return User::all();
});

Route::get('/', 'HomeController@index')->name('home');

Auth::routes();

// Route::get('login', 'Auth\LoginController@showLoginForm')->name('login');
// Route::post('login', 'Auth\LoginController@login');
// Route::post('logout', 'Auth\LoginController@logout')->name('logout');

// // Registration Routes...
// Route::get('register', 'Auth\RegisterController@showRegistrationForm')->name('register');
// Route::post('register', 'Auth\RegisterController@register');

// // Password Reset Routes...
// Route::get('password/reset', 'Auth\ForgotPasswordController@showLinkRequestForm')->name('password.request');
// Route::post('password/email', 'Auth\ForgotPasswordController@sendResetLinkEmail')->name('password.email');
// Route::get('password/reset/{token}', 'Auth\ResetPasswordController@showResetForm')->name('password.reset');
// Route::post('password/reset', 'Auth\ResetPasswordController@reset');

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

Route::get('/tes', function(){
	Mail::raw('Sending emails with Mailgun and Laravel is easy!', function($message)
	{
		$message->subject('Mailgun and Laravel are awesome!');
		$message->from('no-reply@website_name.com', 'Website Name');
		$message->to('yusnardotendioo@gmail.com');
	});
});


