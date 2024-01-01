<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class WeatherApiController extends Controller
{
    public function locationWeather()
    {
        $response = Http::get('https://api.weatherapi.com/v1/current.json?key=74f4f86a228d46e29af155721230808&q=Ankara&aqi=no');
        return view('pages.search');
    }
}
