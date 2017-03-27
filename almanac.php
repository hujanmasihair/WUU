<?php
  //https://www.wunderground.com/weather/api/d/docs?d=data/almanac
  $json_string = file_get_contents("http://api.wunderground.com/api/d2b43c17c1f965d3/almanac/q/CA/Benicia.json");
  $parsed_json = json_decode($json_string);
  $kode = $parsed_json->{'almanac'}->{'airport_code'};
  $temperatur = $parsed_json->{'almanac'}->{'temp_high'}->{'normal'}->{'C'};
  echo "Kode Bandara : ${kode} \n";
  echo "<br>";
  echo "Suhu Udara : ${temperatur} celcius \n";
  echo "<br>";
?>