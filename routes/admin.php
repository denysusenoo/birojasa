<?php

Route::prefix('admin')->group(function () {
    Route::name('admin.')->group(function () {
        Route::get('/', 'Admin\\AdminController@index')->name('dashboard');
        Route::get('/dashboard', 'Admin\\AdminController@index')->name('dashboard2');

        Route::resource('bookings', 'Admin\\BookingController');
        Route::resource('users', 'Admin\\UserController');
        Route::resource('reports', 'Admin\\ReportController');
    });
});
