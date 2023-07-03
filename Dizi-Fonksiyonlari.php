<?php
echo"DİZİ FONKSİYONLARI 1". "<BR>";
echo"IMPLODE"."<br>";
echo "<pre>";
$arr=[1,2,3,4,5,6,7,8,9];
$dizge=implode('=',$arr);
print_r($dizge);
echo"<br>". "-------------------------------------------------" ."<br>";
echo"EXPLODE"."<br>";
$newarr=explode("=",$dizge);
print_r($newarr);
echo"<br>". "-------------------------------------------------" ."<br>";
echo"COUNT"."<br>";
echo count($arr)."<br>";
for ($i=0; $i<=count($arr)-1; $i++){
    echo $arr[$i];
}
echo"<br>" . "-------------------------------------------------" ."<br>";
echo"IS ARRAY"."<br>";
echo is_array($arr) . "<br>";
if(is_array($arr)){
    echo "Bu bir dizidir.";
}
else{
    echo "bir dizi içermiyor.";
}
echo"<br>" . "-------------------------------------------------" ."<br>";
echo"DİZİ FONKSİYONLARI 2". "<BR>";
echo"SHUFFLE"."<br>";
echo "<pre>";
$sayilar = range(1, 20);
shuffle($sayilar);
foreach ($sayilar as $sayi) {
    echo "$sayi ";
}
echo "<br>";
print_r($sayilar);
echo "<br>". "-------------------------------------------------" ."<br>";
echo"COMBINE"."<br>";
$a = array('green', 'red', 'yellow');
$b = array('avocado', 'apple', 'banana');
$c = array_combine($a, $b);

print_r($c);
echo "<br>". "-------------------------------------------------" ."<br>";
echo"COUNT VALUES"."<br>";
$array = array(1, "hello", 1, "world", "hello");
print_r(array_count_values($array));
echo "<br>". "-------------------------------------------------" ."<br>";
echo"FLIP"."<br>";
$input = array("oranges", "apples", "pears");
$flipped = array_flip($input);

print_r($flipped);
echo "<br>". "-------------------------------------------------" ."<br>";
echo"KEY EXISTS"."<br>";
$dizi = array('ilk' => 1, 'ikinci' => 4);
if (array_key_exists('ilk', $dizi)) {
    echo "'ilk' elememanı dizide mevcut";
}
echo "<br>". "-------------------------------------------------" ."<br>";
echo"MAP"."<br>";
function cube($n) {
    return ($n * $n * $n); //$n**3
}

$a = [1, 2, 3, 4, 5];
$b = array_map('cube', $a);
print_r($b);

echo "<br>". "-------------------------------------------------" ."<br>";
echo"FILTER"."<br>";
function tek($var) {
    //tamsayı girdi tek sayı mı diye bakar
     return $var & 1;
 }
 
 function cift($var) {
    //tamsayı girdi çift sayı mı diye bakar
     return !($var & 1);
 }
 
 $array1 = ['a' => 1, 'b' => 2, 'c' => 3, 'd' => 4, 'e' => 5];
 $array2 = [6, 7, 8, 9, 10, 11, 12];
 
 echo " Tek:<br>";
 print_r(array_filter($array1, "tek"));
 echo "<br>Çift:<br>";
 print_r(array_filter($array2, "cift"));
echo "<br>". "-------------------------------------------------" ."<br>";
echo"MERGE"."<br>";
$array1 = array("color" => "red", 2, 4);
$array2 = array("a", "b", "color" => "green", "shape" => "trapezoid", 4);
$result = array_merge($array1, $array2);
print_r($result);

echo "<br>". "-------------------------------------------------" ."<br>";
echo"RAND"."<br>";
$input = array("Neo", "Morpheus", "Trinity", "Cypher", "Tank");
$rand_keys = array_rand($input, 2);
echo $input[$rand_keys[0]] . "<br>";
echo $input[$rand_keys[1]] ;
echo "<br>". "-------------------------------------------------" ."<br>";
echo"REVERSE"."<br>";
$girdi  = array("php", 4.0, array("green", "red"));
$normal = array_reverse($girdi);
$korunan = array_reverse($girdi, true);

print_r($girdi);
print_r($normal);
print_r($korunan);
echo "<br>". "-------------------------------------------------" ."<br>";
echo"SEARCH"."<br>"; //index sırasını yazar.
$array = array(0 => 'blue', 1 => 'red', 2 => 'green', 3 => 'red');

$key = array_search('green', $array); // $key = 2;
$key = array_search('red', $array);   // $key = 1;
/*echo "<br>". "-------------------------------------------------" ."<br>";*/

echo"DİZİ FONKSİYONLARI 3". "<BR>";
echo"IN ARRAY"."<br>";
$os = array("Mac", "NT", "Irix", "Linux");
if (in_array("Irix", $os)) {
    echo "Irix var";
}
if (in_array("mac", $os)) {
    echo "Mac var";
}

echo "<br>". "-------------------------------------------------" ."<br>";
echo"ARRAY SHIFT"."<br>";
$deste = array("as", "papaz", "kiz", "vale");
$kart = array_shift($deste);
print_r($deste);

echo "<br>". "-------------------------------------------------" ."<br>";
echo"ARRAY POP"."<br>";
$depo = array("portakal", "muz", "elma", "ahududu");
$meyve = array_pop($depo);
print_r($depo);

echo "<br>". "-------------------------------------------------" ."<br>";
echo"ARRAY SLICE"."<br>";

$input = array("a", "b", "c", "d", "e");

$output = array_slice($input, 2);      // çıktısı: "c", "d", "e"
$output = array_slice($input, -2, 1);  // çıktısı: "d"
$output = array_slice($input, 0, 3);   // çıktısı: "a", "b", "c"

echo "<br>". "-------------------------------------------------" ."<br>";
echo"ARRAY SUM"."<br>";
$a = array(2, 4, 6, 8);
echo "sum(a) = " . array_sum($a) . "\n";

$b = array("a" => 1.2, "b" => 2.3, "c" => 3.4);
echo "sum(b) = " . array_sum($b) . "\n";

echo "<br>". "-------------------------------------------------" ."<br>";
echo"ARRAY PRODUCT"."<br>";
$a = array(2, 4, 6, 8);
echo "çarpim(a) = " . array_product($a) . "\n";
echo "çarpim(array()) = " . array_product(array()) . "\n";

echo "<br>". "-------------------------------------------------" ."<br>";
echo"ARRAY UNIQUE"."<br>";
$girdi = array("a" => "yeşil", "kirmizi", "b" => "yeşil", "mavi", "kirmizi");
$sonuç = array_unique($girdi);
print_r($sonuç);

echo "<br>". "-------------------------------------------------" ."<br>";
echo"ARRAY VALUES"."<br>";
$dizi = array("beden" => "XL", "renk" => "sarı");
print_r(array_values($dizi));

echo "<br>". "-------------------------------------------------" ."<br>";
echo"ARRAY PUSH"."<br>";
$küme = array("elma", "armut");
array_push($küme, "muz", "portakal");
print_r($küme);

echo "<br>". "-------------------------------------------------" ."<br>";
echo"ARRAY UNSHIFT"."<br>";
$liste = array("ayva", "muz");
array_unshift($liste, "elma", "armut");
print_r($liste);

echo "<br>". "-------------------------------------------------" ."<br>";
echo"ARRAY KEYS"."<br>";
$array = array(0 => 100, "color" => "red");
print_r(array_keys($array));

$array = array("blue", "red", "green", "blue", "blue");
print_r(array_keys($array, "blue"));

$array = array("color" => array("blue", "red", "green"),
               "size"  => array("small", "medium", "large"));
print_r(array_keys($array));

echo "<br>". "-------------------------------------------------" ."<br>";
echo"DİZİ FONKSİYONLARI 4". "<BR>";
echo"PREV"."<br>";
$araç = array('tabanvay', 'bisiklet', 'otomobil', 'uçak');
$kip = current($araç); // $kip = 'tabanvay';
$kip = next($araç);    // $kip = 'bisiklet';
$kip = current($araç); // $kip = 'bisiklet';
$kip = next($araç);    // $kip = 'otomobil';
$kip = prev($araç);    // $kip = 'bisiklet';
$kip = end($araç);     // $kip = 'uçak';
$kip = current($araç); // $kip = 'uçak';

$arr = array();
var_dump(current($arr)); // bool(false)

$arr = array(array());
var_dump(current($arr)); // array(0) { }
echo "<br>". "-------------------------------------------------" ."<br>";
echo"EXTRACT"."<br>";
/* Dizinin wddx_deserialize tarafından döndürülen bir dizi olduğunu varsayalım */

$boyut = "büyük";
$dizi = array("renk"  => "mavi",
              "boyut" => "orta",
              "şekil" => "küre");
extract($dizi, EXTR_PREFIX_SAME, "wddx");

echo "$renk, $boyut, $şekil, $wddx_boyut\n";

// Çıktısı: mavi, büyük, küre, orta

echo "<br>". "-------------------------------------------------" ."<br>";
echo"ASORT"."<br>";
$fruits = array("d" => "lemon", "a" => "orange", "b" => "banana", "c" => "apple");
asort($fruits);
foreach ($fruits as $key => $val) {
    echo "$key = $val\n";
}

echo "<br>". "-------------------------------------------------" ."<br>";
echo"ARSORT"."<br>";
$fruits = array("d" => "lemon", "a" => "orange", "b" => "banana", "c" => "apple");
arsort($fruits);
foreach ($fruits as $key => $val) {
    echo "$key = $val\n";
}

echo "<br>". "-------------------------------------------------" ."<br>";
echo"KSORT"."<br>";
$fruits = array("d"=>"lemon", "a"=>"orange", "b"=>"banana", "c"=>"apple");
ksort($fruits);
foreach ($fruits as $key => $val) {
    echo "$key = $val\n";
}

echo "<br>". "-------------------------------------------------" ."<br>";
echo"KRSORT"."<br>";
$fruits = array("d"=>"lemon", "a"=>"orange", "b"=>"banana", "c"=>"apple");
krsort($fruits);
foreach ($fruits as $key => $val) {
    echo "$key = $val\n";
}

?>