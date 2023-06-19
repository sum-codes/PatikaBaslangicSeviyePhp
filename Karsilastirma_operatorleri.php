<?php
// var_dump() değişkenin türünü ve değerini gösterir.
$a=true;
var_dump($a);
echo "<br>";
$b=2;
$c=2;
$d=5;
$e='2';
var_dump(value:$b==$c); //doğruysa değerini true olarak döndürür.
echo "<br>";
var_dump(value:$b==$d);
echo "<br>";
var_dump(value:$b===$e);
echo "...türü farkli ama değeri ayni...";
var_dump(value:$b==$e);
echo "<br>";
var_dump(value:$b<=>$c); // be ve c eşit olduğu için 0 döndürür.
echo "<br>";
var_dump(value:$c<=>$d);//c d den küçük olduğu için -1 döndürür.
echo "<br>";
var_dump(value:$d<=>$c);//d c den büyük olduğu için 1 döndürür.
//küçük, eşit, büyük hepsini kontrol eder ve sırasıla -1, 0, 1 döndürür.
?>