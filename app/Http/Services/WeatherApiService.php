<?php

namespace App\Http\Services;

use Exception;
use Illuminate\Support\Facades\Http;

class WeatherApiService
{
    protected $weather_api_key;
    public function __construct()
    {
        $this->weather_api_key = env('WEATHER_API_KEY');
    }
    public function getWeatherData($location, $days = 3)
    {
        try {
            $response = Http::get("https://api.weatherapi.com/v1/forecast.json", [
                'key' => $this->weather_api_key,
                'q' => $location,
                'days' => $days,
            ]);
            if ($response->failed()) {
                throw new Exception('The city you are looking for was not found.');
            }
            return $response->json();
        } catch (Exception $e) {
            return ['error' => $e->getMessage()];
        }
    }
}
