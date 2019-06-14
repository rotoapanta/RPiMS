<!DOCTYPE html>
<html>
<head>
<title>RPiMS</title>
<meta http-equiv="refresh" content="30"/>
</head>
<body>
<?php
    $hostname = gethostname();
    
    $redis = new Redis();
    $redis->connect('127.0.0.1', 6379);

    $location = $redis->get('Location');
    $temperature = $redis->get('Temperature');
    $humidity = $redis->get('Humidity');
    $sensor1 = $redis->get('door_sensor_1');
    $sensor2 = $redis->get('door_sensor_2');
    $sensor3 = $redis->get('door_sensor_3');
    $sensor4 = $redis->get('door_sensor_4');

    print "<p>Location: " . $location ."</p>";
    print "<p>Hostname: " . $hostname ."</p><br>";

    print "<p style='color:blue;'>Temperature: " . number_format($temperature,1) ." °C</p>";
    print "<p style='color:blue;'>Humidity: " . number_format($humidity,1) ." %</p><br>";

    print "<p style='color:red;'>Door 1 : " . $sensor1 ."</p>";
    print "<p style='color:red;'>Door 2 : " . $sensor2 ."</p>";
    print "<p style='color:red;'>Door 3 : " . $sensor3 ."</p>";
    print "<p style='color:red;'>Door 4 : " . $sensor4 ."</p>";
?>
</body>
</html>
