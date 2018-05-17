<?php

Route::group(['namespace' => 'Polash\Contact\Http\Controllers'], function (){
   Route::resource('contact', 'ContactController');
});