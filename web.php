<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::get('session/put','App\Http\Controller\SessionController@store');
Route::get('session/get','App\Http\Controller\SessionController@index');
Route::get('session/push','App\Http\Controller\SessionController@push');
Route::get('session/del','App\Http\Controller\SessionController@delete');