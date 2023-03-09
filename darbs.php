<?php
$laiki = [];
$json = @json_decode(file_get_contents('https://api.open-meteo.com/v1/forecast?latitude=56.95&longitude=24.11&hourly=temperature_2m,snowfall,cloudcover,windspeed_10m'), true);
// foreach($json as $key => $value) {
//     $value["time"] -> $laiki;
//     array_push($laiki, $value["time"]);
// };
// print_r($json["hourly"]["snowfall"]);
// (max($json["hourly"]["snowfall"]));
// echo "<br>";
// print_r(min($json["hourly"]["snowfall"]));

foreach($json as $key => $value) {
    $value = ($json["hourly"]["time"]["snowfall"]) -> $laiki;

    
};
print_r($value);
?>