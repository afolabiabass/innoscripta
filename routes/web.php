<?php

/**
 * User - Login, Register, Password Reset, Social Media Auth - Routes
 */
Auth::routes();

Route::group(['middleware' => 'auth'], function () {
    Route::get('/', 'Users\UserController@logins')->name('user.logins');

    Route::resource('users', 'Users\UserController', ['names' => 'users']);
    Route::resource('teams', 'Users\TeamController', ['names' => 'teams']);

    Route::resource('clients', 'Clients\ClientController', ['names' => 'clients']);

    Route::resource('tasks', 'Tasks\TaskController', ['names' => 'tasks']);
});
