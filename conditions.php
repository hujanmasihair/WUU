<?php 
$json_string = file_get_contents("http://api.wunderground.com/api/d2b43c17c1f965d3/conditions/q/CA/San_Francisco.json"); 
$parsed_json = json_decode($json_string); 
$location = $parsed_json->{'current_observation'}->{'display_location'}->{'city'}; 
$weather = $parsed_json->{'current_observation'}->{'weather'};
$temp_f= $parsed_json->{'current_observation'}->{'temp_f'};
$wind_degrees= $parsed_json->{'current_observation'}->{'wind_degrees'};
$local_time_rfc822= $parsed_json->{'current_observation'}->{'local_time_rfc822'};
$observation_time= $parsed_json->{'current_observation'}->{'observation_time'};

echo "Saat ini anda berada di ${location}\n";
echo "<br>";
echo "Cuaca tempat : ${weather}\n";
echo "<br>";
echo "Suhu  : ${temp_f} Fahrenheit \n";
echo "<br>";
echo "Waktu lokal : ${local_time_rfc822}kilometers\n";
echo "<br>";
echo "Update : ${observation_time}\n";
echo "<br>";
?>