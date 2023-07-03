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
$topla= function ($num1, $num2){ //fonksiyon ismi yok. topla değişkenine atadık.
    return $num1 + $num2;
}; //semicolon ile sonlandırılır.

echo $topla(1,2) . "<br>";
?>
<?php
$topla=function(){
    return 2+2;
};
echo $topla();
?>
<?php
echo"<br>"."<br>";
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
echo"<br>"."veya" ."<br>";

function hesapla($n1, $n2, $islem){
    $islem['topla']($n1,$n2);
    $islem['cikar']($n1,$n2);
    $islem['bol']($n1,$n2);
    $islem['carp']($n1,$n2);
}

hesapla(10,5, $islem);
echo"<br>";

echo"<br>"."dizilerde arraymap kullanimi ile"."<br>";

$number = [[1,2],[2,3],[3,4],[4,5]];/*e yazarak dizinin bütün elemanlarını işleme tabi tutabilirim. */
array_map(function ($e){ 
    global $islem;
    echo $e[0].'+'.$e[1].' =';
    $islem['topla']($e[0],$e[1]);
    echo '<br>';
}, $number);
echo"<br>"."DİĞER ÖRNEK"."<br>";
$islem=[
    "topla"=>function($a,$b){return $a+$b;},
    "cikar"=>function($a,$b){return $a-$b;},
    "carp"=>function($a,$b){return $a*$b;},
    "bol"=>function($a,$b){return $a/$b;}
];
echo $islem['topla'](2,4) . "<br>";
echo $islem["cikar"](2,4) ."<br>";
echo $islem["carp"](2,4) . "<br>";
echo $islem["bol"](2,4) . "<br>";
?>



<?php
echo"<br>" . "------------------------------------------------" . "<br>" ."Recursive Fonksiyonlar";

echo"Recursive (öz yinelemeli) fonksiyonlar yani kendi kendini çagiran fonksiyonlardir.
Örnek ile açiklayalim:
categories adinda bir dizi oluşturalim.";

$categories=[
["id"=>1,
    "parent"=>0, //üst kategorisi varsa üst kategoriye ait id bilgisi yazılır. Eğer üst kategorisi yoksa 0 yazılır.
    "name"=>"Bac-End Teknolojileri"    
],
[
"id"=>2,
"parent"=>0,
"name"=>"Front-End Teknolojileri"
],
[
    "id"=>3,
    "parent"=>0,
    "name"=>"Mobil Uygulama"
],
[
    "id"=>4,
    "parent"=>1,
    "name"=>"PHP"
],
[
"id"=>5,
"parent"=>1,
"name"=>"NodeJS"
],
[
"id"=>6,
"parent"=>4,
"name"=>"Laravel"
],
[
"id"=>7,
"parent"=>2,
"name"=>"Codeigniter"
],
[
"id"=>8,
"parent"=>2,
"name"=>"Javascript"
],
[
"id"=>9,
"parent"=>8,
"name"=>"VueJS"
],
[
"id"=>10,
"parent"=>8,
"name"=>"AngularJS"
]
];
echo"<br>"."Bu categori dizisinin elemanlarini hiyararşik biçimde ekrana yazdiralim."."<br>";


function categoryList(array $categories, int $parent = 0) : string {
    $html = '<ul>';
    foreach ($categories as $category)
        if ($category['parent'] == $parent):
            $html .= '<li>' . $category['name'];
            $html .= categoryList($categories, $category['id']);
            $html .= '</li>';
        endif;
    $html .= '</ul>';
    return $html;
}

echo categoryList($categories);
?>



<?php
echo"<br>"."DİĞER ÖRNEK"."<br>";
function sayi($i){
    echo $i . "<br>";
if($i<5)
{
    $i++;
    sayi($i);
}
}
sayi(i:1); //dışarıdan parametre olarak i ye 1 i gönderdik.
?>
<?php
echo"<br>" . "STATIC KAVRAMI" ."<br>";
function say(){
   static $sayi=0;
    echo $sayi;
    $sayi++;
}
say();
say();
say();
?>
<?php
echo"<br>" ."GLOBAL TANIMI" . "<br>";
$isim ='Şahin';
function isimyaz(){
    global $isim;
    echo $isim;
}
isimyaz();
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