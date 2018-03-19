<?php
use Landers\LaravelAms\Facades\Route;

//极验
Route::group(['prefix' => 'geetest'], function () {
    Route::get('captcha', 'Geetest\GeetestController@captcha');
});
