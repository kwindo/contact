<?php

use Illuminate\http\Request;

Route::group(['namespace'=>'Kimdevylder\Contact\Http\Controllers'], function(){
    Route::get('contact', 'ContactController@index')->name('contact');
    Route::post('contact', 'ContactController@send');
});