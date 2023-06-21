<?php
function isim()
{
    //echo "Ertürk"; çalışır.
    return "Ertürk";
}
//isim();
$isim=isim();
echo $isim . "<br>";
?>
<?php
function topla($sayi1, $sayi2 = 30) {
    return  $sayi1 + $sayi2;
 }
 echo topla(10, 20) . "<br>";
 echo topla(10);
echo"<br>";
?>
<?php
function carp($sayi1,$sayi2)
{
    return $sayi1*$sayi2;
}
echo carp(sayi1:2,sayi2:5);
echo"<br>";
?>
<?php
echo"<p>Anonim Fonksiyonlar</p>";
$topla= function ($num1, $num2){
    return $num1 + $num2;
};

echo $topla(1,2) . "<br>";
?>
<?php
$topla=function(){
    return 2+2;
};
echo $topla();
?>
<?php
echo"<br>";
$islem['topla'] = function ($num1, $num2) {
    echo $num1 + $num2.'<br>';
};
$islem['cikar'] = function ($num1, $num2) {
    echo $num1 - $num2.'<br>';
};
$islem['bol'] = function ($num1, $num2) {
    echo $num1 / $num2.'<br>';
};
$islem['carp'] = function ($num1, $num2) {
    echo $num1 * $num2.'<br>';
};

$islem['topla'](10,5);
$islem['cikar'](10,5);
$islem['bol'](10,5);
$islem['carp'](10,5);


function hesapla($n1, $n2, $islem){
    $islem['topla']($n1,$n2);
    $islem['cikar']($n1,$n2);
    $islem['bol']($n1,$n2);
    $islem['carp']($n1,$n2);
}

hesapla(10,5, $islem);

$number = [[1,2],[2,3],[3,4],[4,5]];

array_map(function ($e){
    global $islem;
    echo $e[0].'+'.$e[1].' =';
    $islem['topla']($e[0],$e[1]);
    echo '<br>';
}, $number);
?>
<?php
echo"<br>" . "------------------------------------------------" . "<br>" ."Recursive Fonksiyonlar";

?>
<?php
echo"<br>";

?>
<?php
echo"<br>";

?>
<?php
echo"<br>";

?>
<?php
echo"<br>";

?>
<?php
echo"<br>";

?>
<?php
echo"<br>";

?>