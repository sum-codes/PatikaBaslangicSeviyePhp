<?php
echo "strlen() FONKSİYONU" . "<br>";
$metin="Limon";
echo strlen($metin) . "<br>" . mb_strlen($metin, encoding: 'UTF-8');
/* Eğer Şahin gibi türkçe karakter içeren bir metin yazarsam, strlen fonksiyonu byte  olarak döndürdüğü için bize uzunluğunu 6 olarak döndürür.
mb multibyte diyerek türkçe karakterlerin uzunluğunu doğru gösterir.
ikinci parametre olarak karakter setini gönderebiliriz.
 */


echo "<br>"."-------------------------"."<br>";
echo "strstr() FONKSİYONU" . "<br>";
$email  = 'name@example.com';
$domain = strstr($email, '@');
echo $domain; // @example.com basar


echo "<br>"."-------------------------"."<br>";
echo "explode() ve implode() FONKSİYONU" . "<br>";
$metin2="Şahin Turgut Ersever";
echo "<pre>";
print_r(explode(' ', $metin2));
echo "<br>";
$array=(explode(' ', $metin2));
echo implode('#', $array);


echo "<br>"."-------------------------"."<br>";
echo "srtsplit() FONKSİYONU" . "<br>";
$array2 = str_split ($metin2, length:2);
print_r($array2);
echo"<br>";
$array3=mb_str_split($metin2, length:2);
print_r($array3);


echo "<br>"."-------------------------"."<br>";
echo "ltrim(), rtrim(), trim() FONKSİYONU" . "<br>";
$metin3="      Şahin Turgur Ersever   ";
echo strlen($metin3) . "<br>";
$metinltrim=ltrim($metin3);
echo strlen($metinltrim) . "<br>";
$metinrtrim= rtrim($metin3);
echo strlen($metinrtrim) . "<br>";
$metintrim= trim($metin3);
echo strlen($metintrim) . "<br>";

echo $metin3 . "<br>";
echo $metinltrim . "<br>";
echo $metinrtrim . "<br>";
echo $metintrim;

echo "<br>"."-------------------------"."<br>";
echo "substr() FONKSİYONU" . "<br>";
$yazi =  "semsi pasa Pasaji";
$yazi2 = substr($yazi, offset:5, length:5);
echo $yazi2;


echo "<br>"."-------------------------"."<br>";
echo "strtolower() ve strtoupper() FONKSİYONU" . "<br>";
$yazilower= strtolower($yazi); //Türkçe karakterler için mb_strtoupper() -multibyte- 
$yaziupper= strtoupper($yazi);
echo $yazilower . "<br>";
echo $yaziupper . "<br>";


echo "<br>"."-------------------------"."<br>";
echo "ucfirst() ve ucwords() FONKSİYONU" . "<br>";
$yazifirst= ucfirst($yazi);
$yaziwords= ucwords($yazi);
echo $yazifirst . "<br>";
echo $yaziwords . "<br>";


echo "<br>"."-------------------------"."<br>";
echo "str_replace() FONKSİYONU" . "<br>";
$metin5 = "Bu semsi'nin metnidir.";
$metinReplace = str_ireplace("semsi", "ali", $metin5);
echo $metinReplace . "<br>";

/*Not: str_ireplace() fonksiyonu, büyük-küçük harf duyarlılığını önemsemez. Yani, aranan metin içindeki harflerin büyük-küçük harf uyumuna dikkat etmez. Bu nedenle, "semsi" kelimesi hem büyük hem de küçük harflerle yazılsa bile değiştirme işlemi gerçekleşir. */

echo "<br>"."-------------------------"."<br>";
echo "Alt satira geçecek: " ."<br>";
$satir = "yol bolu zaman \n hizdir ";
echo $satir . "<br>";
echo "Bir tab boşluk: " ."<br>";
$satir2="yol bolu zaman \t hizdir ";
echo $satir2;

echo "<br>"."-------------------------"."<br>";
echo "nl2br() FONKSİYONU" . "<br>";
 echo nl2br($satir);


 echo "<br>"."-------------------------"."<br>";
 echo "md5() ve sha1() FONKSİYONU" . "<br>";
$sifre= "12345";
echo md5($sifre) . "<br>";
echo sha1($sifre) . "<br>";

echo "ORNEK:" . "<br>";
$db_sifre="827ccb0eea8a706c4c34a16891f84e7b";
 if(md5($sifre) == $db_sifre){
    echo "Şifreniz doğrudur.";
 }
 else echo "Şifreniz hatalidir.";


 echo "<br>"."-------------------------"."<br>";
 echo "strstr() FONKSİYONU" . "<br>";
$lorem= "Lorem ipsum dolar sit amet.";
echo strstr($lorem, needle:"sit") . "<br>";
$mail= "ece@gmail.com";
echo strstr($mail, "@")

?>