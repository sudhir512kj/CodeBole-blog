<?php

Route::get('/', 'PostsController@index')->name('home');

Route::get('/posts/create', 'PostsController@create');

Route::post('/posts', 'PostsController@store');

Route::get('/posts/{post}', 'PostsController@show');

Route::get('/posts/tags/{tag}', 'TagsController@index');

Route::post('/posts/{post}/comments', 'CommentsController@store');

Route::get('/register', 'RegistrationController@create');

Route::post('/register', 'RegistrationController@store');

Route::get('/subscribersignup', 'SubscriberSignUpController@signup');

Route::post('/savesubscribers', 'SubscriberSignUpController@subscribe');

Route::post('/send', 'EmailController@send');

Route::get('/login', 'SessionsController@create');

Route::post('/login', 'SessionsController@store');

Route::get('profile', 'UserController@profile');

Route::post('profile', 'UserController@update_avatar');

Route::get('/logout', 'SessionsController@destroy');






Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
    Route::get('/compose', 'EmailController@compose');
});
