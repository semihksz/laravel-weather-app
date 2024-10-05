<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Weather Application</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            line-height: 1.6;
            margin: 20px;
        }
        h1, h2, h3 {
            color: #333;
        }
        ul {
            list-style-type: disc;
            padding-left: 20px;
        }
        img {
            max-width: 100%;
            height: auto;
        }
    </style>
</head>
<body>

<h1>Weather Application</h1>

<p>
    This project is a weather application that allows users to view weather data for a specific location.
    Users can enter the desired city to get the current weather, weather conditions, and a 3-day forecast.
    The project uses the <a href="https://www.weatherapi.com/">WeatherAPI</a> service to provide up-to-date weather data.
</p>

<h2>Features</h2>
<ul>
    <li>Display weather data based on the user's input location.</li>
    <li>Current weather information (temperature, humidity, wind speed, etc.).</li>
    <li>Show a 3-day weather forecast.</li>
    <li>Enhance user experience with weather condition icons.</li>
</ul>

<h2>Technologies Used</h2>
<ul>
    <li><strong>Laravel</strong>: Used for the backend infrastructure of the project.</li>
    <li><strong>WeatherAPI</strong>: API used to retrieve weather data.</li>
    <li><strong>Blade Templating Engine</strong>: The template engine that comes with Laravel, enabling dynamic HTML content generation.</li>
</ul>

<h2>Project Structure</h2>
<ul>
    <li><strong>Controllers</strong>: Controllers managing the business logic of the application.</li>
    <li><strong>Services</strong>: Services managing interactions with the API.</li>
    <li><strong>Views</strong>: Blade templates that create the user interface.</li>
</ul>

<img src="public/assets/images/img.jpeg" alt="Weather Application">

</body>
</html>
