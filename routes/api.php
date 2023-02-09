<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::prefix('/temperatures')->group(function() 
{
    Route::get('/', 'App\Http\Controllers\TemperatureController@index');
    Route::get('/getNewVal', 'App\Http\Controllers\TemperatureController@index2');
});

Route::prefix('/humidities')->group(function() 
{
    Route::get('/', 'App\Http\Controllers\HumidityController@index');
    Route::get('/getNewVal', 'App\Http\Controllers\HumidityController@index2');
});


Route::prefix('/lights')->group(function() 
{
    Route::get('/', 'App\Http\Controllers\LightController@index');
    Route::get('/getNewVal', 'App\Http\Controllers\LightController@index2');
});


Route::prefix('/carbondioxides')->group(function() 
{
    Route::get('/', 'App\Http\Controllers\CarbondioxideController@index');
    Route::get('/getNewVal', 'App\Http\Controllers\CarbondioxideController@index2');
});

Route::prefix('/waterqualities')->group(function() 
{
    Route::get('/', 'App\Http\Controllers\WaterqualityController@index');
    Route::get('/getNewVal', 'App\Http\Controllers\WaterqualityController@index2');
});

Route::prefix('/waterlevels')->group(function() 
{
    Route::get('/', 'App\Http\Controllers\WaterlevelController@index');
    Route::get('/getNewVal', 'App\Http\Controllers\WaterlevelController@index2');
});

Route::prefix('/roles')->group(function() 
{
    Route::get('/', 'App\Http\Controllers\RoleController@index');
    Route::post('/save', 'App\Http\Controllers\RoleController@save');
    Route::put('/{roles}/update', 'App\Http\Controllers\RoleController@update');
});

Route::prefix('/sensorsconfigurations')->group(function() 
{
    Route::get('/', 'App\Http\Controllers\SensorsconfigurationController@index1');
    Route::get('/indexs', 'App\Http\Controllers\SensorsconfigurationController@index');
    Route::put('/indexs/{sensorsconfiguration}/activate', 'App\Http\Controllers\SensorsconfigurationController@activate');
    Route::post('/indexs/save', 'App\Http\Controllers\SensorsconfigurationController@save'); 
    Route::put('/{sensorsconfiguration}/update', 'App\Http\Controllers\SensorsconfigurationController@update');
    Route::delete('/{sensorsconfiguration}/destroy', 'App\Http\Controllers\SensorsconfigurationController@destroy');
});

Route::prefix('/histories')->group(function() 
    {
        Route::get('/', 'App\Http\Controllers\SensorsconfigurationController@index2');
        Route::delete('/{sensorsconfiguration}/recover', 'App\Http\Controllers\SensorsconfigurationController@recover');
    });

Route::prefix('/users')->group(function() 
{
    Route::get('/', 'App\Http\Controllers\UserController@index');
    Route::put('/indexs/{sensorsconfiguration}/activate', 'App\Http\Controllers\UserController@activate');
    Route::post('/indexs/save', 'App\Http\Controllers\UserController@save'); 
    Route::put('/{sensorsconfiguration}/update', 'App\Http\Controllers\UserController@update');
    Route::delete('/{sensorsconfiguration}/destroy', 'App\Http\Controllers\UserController@destroy');
});
