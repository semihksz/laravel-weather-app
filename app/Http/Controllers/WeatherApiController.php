<?php

namespace App\Http\Controllers;

use App\Http\Services\WeatherApiService;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class WeatherApiController extends Controller
{
    protected $weatherService;
    public function __construct(WeatherApiService $weatherApiService)
    {
        $this->weatherService = $weatherApiService;
    }

    public function index()
    {
        $weatherData = $this->weatherService->getWeatherData('Ankara');

        if (isset($weatherData['error'])) {
            return redirect()->route('index')->with('error', $weatherData['error']);
        }

        $datas = [
            'location' => $weatherData['location'],
            'current' => $weatherData['current'],
            'forecast' => $weatherData['forecast']['forecastday'],
        ];
        return view('welcome')->with('datas', $datas);
    }

    public function locationWeather(Request $request)
    {
        $location = $request->location;

        $weatherData = $this->weatherService->getWeatherData($location);
        if (isset($weatherData['error'])) {
            return redirect()->route('index')->with('error', $weatherData['error']);
        }
        $datas = [
            'location' => $weatherData['location'],
            'current' => $weatherData['current'],
            'forecast' => $weatherData['forecast']['forecastday'],
        ];
        return view('welcome')->with('datas', $datas);
    }
}
