<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class PageController extends Controller
{
    public function index()
    {
        $cities = ['Istanbul', 'Ankara', 'Izmir'];
        $weather_api_key = env('WEATHER_API_KEY');
        foreach ($cities as $city) {
            $response = Http::get("https://api.weatherapi.com/v1/current.json?key=$weather_api_key&q={$city}&aqi=no");
            $location[$city] = $response['location'];
            $current[$city] = $response['current'];
            $condition[$city] = $response['current']['condition'];
        }

        return view('pages.index', compact('location', 'current', 'condition', 'cities'));
    }
}
