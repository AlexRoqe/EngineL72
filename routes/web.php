<?php

use Illuminate\Support\Facades\Route;

/* Home */
Route::get('/', 'GlobalController@home');
/* Home */

/* Auth */
Auth::routes();
/* Auth */

/* Admin */
Route::group

([
    'prefix' => 'area',
    'namespace' => 'Admin',
    'middleware' => 'auth',
],

function()
{

    Route::get('dashboard', 'DashboardController@dashboard')->name('dashboard');

});
/* Admin */

/* ***** */