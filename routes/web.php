<?php

use App\Http\Controllers\WeatherApiController;
use Illuminate\Support\Facades\Route;

Route::get('/', [WeatherApiController::class, 'index'])->name('index');
Route::post('/location-weather', [WeatherApiController::class, 'locationWeather'])->name('locationWeather');
