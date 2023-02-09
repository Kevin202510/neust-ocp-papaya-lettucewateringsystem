<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/temperatures', function () { return view('monitoringlogs.temperatures.index'); })->name('Temperature')->middleware('auth');
Route::get('/humidities', function () { return view('monitoringlogs.humidities.index'); })->name('Humidity')->middleware('auth');
Route::get('/lights', function () { return view('monitoringlogs.lights.index'); })->name('Light')->middleware('auth');
Route::get('/waterqualities', function () { return view('monitoringlogs.waterquality.index'); })->name('Water Quality')->middleware('auth');
Route::get('/waterlevels', function () { return view('monitoringlogs.waterlevels.index'); })->name('Water Levels')->middleware('auth');
Route::get('/users', function () { return view('management.users.index'); })->name('Users')->middleware('auth');
Route::get('/sensorsconfigurations', function () { return view('sensorconfiguration.index'); })->name('Sensors Configuration')->middleware('auth');
Route::get('/histories', function () { return view('sensorconfiguration.history'); })->name('Configuration History')->middleware('auth');
