<?php
    $config = include('api.php');
    $apiKey = $config['api_key'];
    if(isset($_GET['city'])){
        $city = urlencode($_GET['city']);
        $apiUrl = "http://api.weatherapi.com/v1/current.json?key={$apiKey}&q={$city}&aqi=no";
        $weatherData = file_get_contents($apiUrl);
        echo $weatherData;
    }else{
        echo json_encode(['error' => 'No city provided']);
    }
?>