<?php
    $config = include('api.php');
    $apiKey = $config['api_key'];
    if(isset($_GET['city']) && isset($_GET['units'])){
        $city = urlencode($_GET['city']);
        $units = $_GET['units'];
        $apiUrl = "http://api.weatherapi.com/v1/forecast.json?key={$apiKey}&q={$city}&days=3&units={$units}";
        $weatherData = file_get_contents($apiUrl);
        if($weatherData === FALSE){
            echo json_encode(['error' => 'Failed to fetch weather data']);
        }else{
            echo $weatherData;
        }
    }else{
        echo json_encode(['error' => 'No city or units provided']);
    }
?>