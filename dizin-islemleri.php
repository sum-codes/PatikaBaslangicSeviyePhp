<?php
//dizinlerin de varlığı kontrol edilir. bool(true) çıktısını verir.
var_dump(file_exists(filename: 'a'));
echo "<br>" . "-------------" . "<br>";
//dizin oluşturulur. yalnız 1 defa çalıştırılır. Aksi takdirde hata verir.
//mkdir(directory:'ece');

$dizinAdi='c/b/a';
//$dizinAdi="c/b/a"; dizin ve alt dizinler.
if(file_exists($dizinAdi)){
    echo "Bu dizin zaten oluşturulmuş.";
}
else{
    if(mkdir($dizinAdi, recursive:true)){
        echo "Dizin oluşturuldu.";
    }
    
    else echo "Bir hata meydana geldi.";
 //  if(mkdir($dizinAdi)){ //mkdir de bool(true) döndürür. iç içe klasör yapısı için mkdir($dizinAdi, permission:0777,recursive:true) permissin(izin) default 0777 gelir. alt dizin için recursive default false dan true yapılır.
    }

echo "<br>" . "-------------" . "<br>";

//Dizin silme için:

$silinecekDizin="a"; //burada c/b/a dersem en içteki a dizini silinir.
if(file_exists($silinecekDizin)){
    rmdir($silinecekDizin);
    echo $silinecekDizin . " dizini silindi";
}
else echo $silinecekDizin . " dizini zaten silinmiş.";

echo "<br>" . "-------------" . "<br>";


?>