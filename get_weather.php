<?php
$apiKey = "f7e08576e54dcec853912b2d0002ae30";

function getWeather($cityId) {
    global $apiKey;

    $url = "https://api.openweathermap.org/data/2.5/weather?id={$cityId}&units=metric&appid={$apiKey}&lang=ru";

    $response = file_get_contents($url);

    return $response;
}

$cityId = $_GET['cityId'];

echo getWeather($cityId);
?>
