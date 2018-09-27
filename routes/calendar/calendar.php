<?php

Route::get('/', 'CalendarController@index')->name('calendar');

Route::get('/viewevent/training/{id}', 'CalendarController@viewEventTraining')->name('calendar.viewevent.training');

Route::get('/viewevent/mock/{id}', 'CalendarController@viewEventTraining')->name('calendar.viewevent.mock');

Route::get('/viewevent/fundrasing/{id}', 'CalendarController@viewEventTraining')->name('calendar.viewevent.fund');