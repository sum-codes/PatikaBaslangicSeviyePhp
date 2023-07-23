<?php
/*date();
Yerel tarihi/saati biçimlendirir.
*/
date_default_timezone_set('Europe/Istanbul');
echo date('Y.m.d H:i:s');
/*
Bunu bir değişkene atayıp da gösterebiliriz ve kullanabiliriz:
*/
echo "<br>";

date_default_timezone_set('Europe/Istanbul');
$format = 'n';
echo date($format);

echo "<br>";
echo time();
echo "<br>";
$unix=strtotime('+1 month +5 days');
echo date('Y-m-d H:i:s' , $unix);
echo "<br>";
$t=strtotime('-5 month', $unix);
echo date('Y-m-d H:i:s', $t);
echo "<br>-------------------<br>";

?>

<?php
echo "DateTime Sınıfı" . "<br>";
date_default_timezone_set('Europe/Istanbul');

$date = new DateTime();
// $date->setTimezone(new DateTimeZone('Europe/Istanbul'));
echo  $date->format('Y-m-d H:i:s');

echo "<br>";

$date = new DateTime('+ 1 month');
echo  $date->format('Y-m-d H:i:s');
echo "<br>";

$date = new DateTime('+ 1 month');
echo  $date->format('Y-m-d H:i:s')."<br>";
echo  $date->getTimestamp();

echo "<br>";

$date = new DateTime();
$date->setTimestamp(time());
echo $date->format('Y-m-d H:i:s');

$date = new DateTime();


echo  $date->format('Y-F-d H:i:s')."<br>";
echo  $date->modify('+1 day')->format('Y-m-d')."<br>";
echo  $date->modify('+3 day')->format('Y-m-d')."<br>";
echo  $date->modify('+2 day')->format('Y-m-d')."<br>";

echo "<br>---------<br>";


$tarih1= new DateTime('1993-01-10');
$tarih2= new DateTime('1993-08-26');
$diff = $tarih1->diff($tarih2);
echo "<pre>";
print_r($diff);


?>