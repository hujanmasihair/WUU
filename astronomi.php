<?php
  //https://www.wunderground.com/weather/api/d/docs?d=data/almanac
  $json_string = file_get_contents("http://api.wunderground.com/api/d2b43c17c1f965d3/astronomy/q/CL/San_Felipe.json");
  $parsed_json = json_decode($json_string);
  $bulan = $parsed_json->{'moon_phase'}->{'ageOfMoon'};
  $arah = $parsed_json->{'moon_phase'}->{'hemisphere'};
  $phaseofMoon = $parsed_json->{'moon_phase'}->{'phaseofMoon'};
  $persen = $parsed_json->{'moon_phase'}->{'percentIlluminated'};
  echo "Age Of Moon : ${bulan}\n";
  echo "<br>";
  echo "Hemisphere : ${arah}\n";
  echo "<br>";
  echo "Phase of Moon : ${phaseofMoon}\n";
  echo "<br>";
  echo "Percent Illuminated : ${persen}\n";
  echo "<br>";
  ?>