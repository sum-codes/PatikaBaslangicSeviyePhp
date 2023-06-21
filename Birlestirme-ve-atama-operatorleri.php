<?php 
$isim = 'Şahin';
$soyisim = 'Ersever';
$yas = 27;
echo 'Merhaba, benim ismim '. $isim.' soyismim '.$soyisim.'. Şuan '.$yas.' yaşimdayim.';
// Ekrana "Merhaba, benim ismim Şahin soyismim Ersever. Şuan 27 yaşımdayım." sonucunu yazar.
$html  = '<div>';
$html .=    '<h1>Patika.Dev</h1>';
$html .= '</div>';
echo $html; // Ekrana "Patika.dev" olarak basar.
?>
<?php 
$a = 3;
echo $a += 3;
echo"<br>";
?>
<?php 
$a = 3;
echo $a -= 3;
echo"<br>";
?>
<?php 
$a = 3;
echo $a /= 3;
echo"<br>";
?>
<?php 
$a = 5;
echo $a %= 3;
echo"<br>";
?>
<?php
$modul = '<div>';
$modul .= '<p>Lorem ipsum dolor.</p>';
$modul .= '</div>';

echo $modul;
?>