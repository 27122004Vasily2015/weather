<?php
$apiKey = "457880b13ecc6f44c62ac42ce3c39ec3";

function getWeather($cityId) {
    global $apiKey;

    $url = "https://api.openweathermap.org/data/2.5/weather?id={$cityId}&units=metric&appid={$apiKey}&lang=ru";

    $response = file_get_contents($url);

    return $response;
}

$cityId = $_GET['cityId'];

echo getWeather($cityId);
?>
