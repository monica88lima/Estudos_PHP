<?php
echo date('d/m/Y');
echo "<br>";

//classe datetime
$datetime1 = new DateTime('2009-01-01');
$datetime2 = new DateTime('2009-12-31');
$interval = $datetime1->diff($datetime2);
echo $interval->format('%R%a days');
echo "<br>";
$date = new DateTime('2023-09-01');
$date->sub(new DateInterval('P10M5DT10H50M0S'));
echo $date->format('d/m/y H:i:s') . "\n";