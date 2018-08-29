<?php
$WeatherSource = "https://api.forecast.io/forecast/2baf61485dcfb287349b1d8e0a87b5cb/" . $_GET["lat"] . "," . $_GET["lng"];
header("Content-Type: application/json");
header("Cache-Control: no-cache");
readfile($WeatherSource);
?>