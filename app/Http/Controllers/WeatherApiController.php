<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class WeatherApiController extends Controller
{
    public function locationWeather()
    {
        $weather_api_key = env('WEATHER_API_KEY');

        $response = Http::get("https://api.weatherapi.com/v1/current.json?key=$weather_api_key&q=Ankara&aqi=no");
        return view('pages.search');
    }
}
