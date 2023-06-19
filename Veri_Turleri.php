<?php 
$a_bool = TRUE; // boolean türünde $a_str  = "Şahin ERSEVER";  // string türünde
$a_str = 'Patika';  // string türünde
$an_int = 27;     // integer  türünde

echo gettype($a_bool); // boolean basar
echo "<br>";
echo gettype($a_str);  // string basar
echo "<br>";
$a="Şahin";
echo gettype($a); //string
echo "<br>";
$b=3;
echo gettype($b); //integer
echo "<br>";
$c=3.3;
echo gettype($c); //double
echo "<br>";
$d="TRUE"; //tırnak içinde olduğu için string
echo gettype($d);
echo "<br>";
$e=[];
echo gettype($e); //array
echo "<br>";
$f=new stdClass();
echo gettype($f); //object
echo "<br>";
$h= NULL; //null
echo gettype($h);
echo "<br>";
echo var_dump($d); ///Bir ifadenin değerinin ve türünün ne olduğuna bakmak için kullanılır.
?>