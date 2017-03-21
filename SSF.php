<?php
$city="Moscow";
$country="RU";

$url="http://api.openweathermap.org/data/2.5/weather?id=524901&appid=f700a39d8b3c95446c4e86a6d279ce4e";

$json=file_get_contents($url);
$data=json_decode($json,true);

echo "Погода в Москве" .' '. date('Y-m-d H:i:s') . "<br>";

echo "Температура воздуха:" . ' ';
echo $data['main']['temp'] - 273 . ' '. 'градусов по Цельсию'. "<br>";

echo "Облачность:" . ' ';
echo $data['weather'][0]['main']."<br>";

echo "Скорость ветра:" . ' ';
echo $data['wind']['speed']. ' ' .'м\с'. "<br>";

echo "Влажность:" . ' ';
echo $data['main']['humidity']. ' '. '%' . "<br>";

?>