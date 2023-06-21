<?php 
$a = 5;
$b = 2;
$c = 6;

echo ($a > $b) && ($a != $b); // Hem $a > $b hem de $a != $b durumları true sonucu verdiğinden; sonuç true olacaktır.
echo"<br>";

echo ($a > $b) || ($a == $b); // Hem $a > $b true $a == $b false sonucu verdiğinden; Veya(||) koşulunda sonuç true olacaktır.
echo"<br>";

$sonuc = ($a==4) && ($b==1) || ($a!=$b);
var_dump($sonuc);
?>