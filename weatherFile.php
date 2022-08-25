<?php

$zipCode = $_GET["zip"];

sleep(3);
$url = "http://api.openweathermap.org/data/2.5/weather?zip=$zipCode,us&units=metric&appid=bb081d68d7c82740bd5fa833b7d54546";

$filePointer = fopen($url, "r");
$weatherContent = "";

while ($more = fread($filePointer, 1000)) {
	$weatherContent .= $more;
}

echo $weatherContent;

?>