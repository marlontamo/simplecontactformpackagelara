<?php


use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::group(['namespace'=>'App\Package\contact\src\http\Controller'], function(){
    route::get('contact', 'ContactController@index')->name('contact');
    route::post('contact', 'ContactController@send');
});
