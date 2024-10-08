<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Greenhouse Monitoring</title>
    <style>
        /* CSS Styles */
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
            padding: 20px;
            background-color: #f0f0f0;
        }
        h1 {
            color: #4CAF50;
        }
        a {
            display: inline-block;
            margin-top: 20px;
            padding: 10px 15px;
            background-color: #4CAF50;
            color: white;
            text-decoration: none;
            border-radius: 5px;
        }
        a:hover {
            background-color: #45a049;
        }
        .sensor-data {
            background: white;
            padding: 15px;
            border-radius: 8px;
            box-shadow: 0 2px 5px rgba(0,0,0,0.1);
            margin-bottom: 20px;
        }
        .row {
            display: flex;
            justify-content: space-between;
        }
        .col {
            flex: 1;
            margin: 10px;
        }
        .widget {
            background: white;
            padding: 15px;
            border-radius: 8px;
            box-shadow: 0 2px 5px rgba(0,0,0,0.1);
            text-align: center;
        }
    </style>
</head>
<body>
    <h1>Greenhouse Monitoring</h1>
    <p>Here, you'll see live data from the greenhouse sensors.</p>
    
    <div class="sensor-data">
        <h2>Current Sensor Readings</h2>
        <!-- Dynamic content using Blade syntax -->
        @if ($sensorData)
            <p>Temperature: {{ $sensorData->temperature }}°C</p>
            <p>Humidity: {{ $sensorData->humidity }}%</p>
            <p>Light Intensity: {{ $sensorData->light_intensity }} lux</p>
        @else
            <p>No sensor data available.</p>
        @endif
    </div>

    <a href="{{ route('home') }}">Back to Home</a>

    <section id="monitoring">
        <h2>Monitoring Sensor</h2>
        <div class="row">
            <div class="col">
                <div class="widget">
                    <h3>Temperature</h3>
                    <canvas id="temp-chart" width="200" height="150"></canvas>
                    <meter id="temp-meter" value="25" min="0" max="50"></meter>
                    <p id="temp-data">25°C</p>
                </div>
            </div>
            <div class="col">
                <div class="widget">
                    <h3>Humidity</h3>
                    <canvas id="humidity-chart" width="200" height="150"></canvas>
                    <meter id="humidity-meter" value="60" min="0" max="100"></meter>
                    <p id="humidity-data">60%</p>
                </div>
            </div>
            <div class="col">
                <div class="widget">
                    <h3>CO2</h3>
                    <canvas id="co2-chart" width="200" height="150"></canvas>
                    <meter id="co2-meter" value="800" min="0" max="2000"></meter>
                    <p id="co2-data">800 ppm</p>
                </div>
            </div>
        </div>
    </section>

    <script>
        // JavaScript for dynamic updates (example)
        document.addEventListener('DOMContentLoaded', function() {
            // Example function to update sensor data
            function updateSensorData() {
                // Fetch new data from API or server
                // For demonstration, using static data
                const newData = {
                    temperature: 27,
                    humidity: 65,
                    co2: 850
                };

                // Update the DOM elements with new data
                document.getElementById('temp-data').innerText = `${newData.temperature}°C`;
                document.getElementById('humidity-data').innerText = `${newData.humidity}%`;
                document.getElementById('co2-data').innerText = `${newData.co2} ppm`;

                // Update the meter