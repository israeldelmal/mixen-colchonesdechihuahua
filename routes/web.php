<?php
// Web
Route::get('/', 'WebController@index')->name('index');
Route::post('/contacto', 'WebController@contact');