<?php
echo "<p>FOR DÖNGÜSÜ</p>";
for ($i = 1; $i <= 10; $i++) {   
      echo $i;
}
?>
<?php
echo"<br>";
$dizi=[
    'Ahmet',
    'Mehmet',
    'Şahin',
    'Ali',
    'Veli'
];
echo $dizi[2];
/*Dizideki anahtarları for döngüsündeki i değeri ile verip for ile ekrana yazacağım.
*/
?>
<?php
echo"<br>" . "-----------------------------" ."<br>";
$dizi=[
    'Ahmet',
    'Mehmet',
    'Şahin',
    'Ali',
    'Veli'
];
for ($i = 0; $i <= 4; $i++) {   
    echo $dizi[$i] . '<br>';
}
?>
<?php
echo "<p>FOREACH DÖNGÜSÜ</p>";
$isimler=['Şahin','Fatma','Ahmet','Mehmet'];
foreach($isimler as $value){
    echo $value . "<br>";
}
echo"<br>" . "-----------------------------" ."<br>";
echo"Keyleri ile birlikte yazdiralim." . "<br>";
foreach($isimler as $key => $değer){
    echo $key . "-" . $değer ."<br>";
}
echo"<br>" . "-----------------------------" ."<br>";
?>
<?php
echo"<P>WHILE VE DO-WHILE DÖNGÜSÜ</P>";
$i=0;
while($i <= 10){/*i nin değerini burada $i++ arttırabilirdik.*/
    echo $i."Selam<br>";
    $i++;/*i nin değerini sonda arttırınca i=0 dan başlar. Deyimin içinde arttırınca i=1 den başlar.*/
}
echo"<p>do-while</p>";

$a=1;
do{
    echo $a. "Selam<br>";
    $a++;
}
while($a<=5);
?>