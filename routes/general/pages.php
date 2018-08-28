<?php

Route::get('/dashboard', 'DashboardController@index')->name('dashboard');

Route::get('/profile', 'ProfileController@index')->name('profile');

Route::get('/dog', 'DogController@index')->name('dog');

Route::get('/calendar', 'CalendarController@index')->name('calendar');