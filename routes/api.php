<?php

//use App\Http\Controllers\TramitesController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;


Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/tramite','App\Http\Controllers\TramitesController@index');
Route::post('/tramite','App\Http\Controllers\TramitesController@store');
Route::get('/tramite/{tramite}','App\Http\Controllers\TramitesController@show');
Route::put('/tramite/{tramite}','App\Http\Controllers\TramitesController@update');
Route::delete('/tramite/{tramite}','App\Http\Controllers\TramitesController@destroy');




