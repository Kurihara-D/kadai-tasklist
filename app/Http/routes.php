<?php
Route::get('/', 'MessagesController@index');
Route::resource('messages', 'MessagesController');
