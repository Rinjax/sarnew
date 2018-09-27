<?php

Route::get('/1a{start?}{end?}', 'CalendarFeedController@feed1a')->name('calfeed.training');

Route::get('/2a{start?}{end?}', 'CalendarFeedController@feed2a')->name('calfeed.mock');

Route::get('/3a{start?}{end?}', 'CalendarFeedController@feed3a')->name('calfeed.fund');