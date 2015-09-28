<?php
Route::get('/', ['middleware' => 'auth', function() {
    return view('workspaces.editor');
}]);

Route::get('/editor', function () {
    return view('workspaces.editor');
});

Route::get('/terminal', function () {
    return view('workspaces.terminal');
});

// Authentication routes...
Route::get('auth/login', 'Auth\AuthController@getLogin');
Route::post('auth/login', 'Auth\AuthController@postLogin');
Route::get('auth/logout', 'Auth\AuthController@getLogout');

// Registration routes...
Route::get('auth/register', 'Auth\AuthController@getRegister');
Route::post('auth/register', 'Auth\AuthController@postRegister');
