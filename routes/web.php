<?php

////Route Login/Register
Route::GET('host/home','HostController@index');
Route::GET('host/login','Host\LoginController@showLoginForm')->name('host.login');
Route::POST('host/login','Host\LoginController@login');           
//Route::POST('host/logout','HostController@logout');

Route::POST('host-password/email','Host\ForgotPasswordController@sendResetLinkEmail')->name('host.password.email');
Route::GET('host-password/reset','Host\ForgotPasswordController@showLinkRequestForm')->name('host.password.request');
Route::POST('host-password/reset','Host\ResetPasswordController@reset');
Route::GET ('host-password/reset/{token}','Host\ResetPasswordController@showResetForm')->name('host.password.reset');

Route::GET('host/register','Host\RegisterController@showRegistrationForm')->name('host.register');
Route:: POST('host/register','Host\RegisterController@register');
////Route Login/Register

Route::get('blog/{slug}',['as'=>'blog.single', 'uses'=>'BlogCOntroller@getSingle'])->
        where('slug','[\w\d\-\_]+');
Route::get('blog',['uses'=>'BlogCOntroller@getIndex', 'as'=>'blog.index']);
Route::get('contact','PagesController@getContact');   
Route::get('about','PagesController@getAbout');
Route::get('/','PagesController@getIndex');


Route::get('posts','PostController@Index');
Route::get('posts/create','PostController@Create');
Route::post('posts/store','PostController@Store');
Route::get('posts/show/{id}','PostController@Show');
Route::get('posts/edit/{id}','PostController@Edit');
Route::Post('posts/update','PostController@Update');
Route::get('posts/delete/{id}','PostController@Delete');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
