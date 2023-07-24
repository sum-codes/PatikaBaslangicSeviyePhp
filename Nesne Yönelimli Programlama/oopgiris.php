<?php
class user{

    //Değişkenler, sabitler ve fonksiyonlar tanımlanıyor. Değişken ve sabitlere özellik denir, fonksiyona method denir.
    public $isim='Şahin';
    //const anahtar sözcüğü ile de sabitler tanımlanabilir.
    const yas=28;
    public $toplam; //eklersek bunu yazdıramayız. 

public function isimyaz(){
    //this anahtar sözcüğü sınıfımızı gösterir. Yani this derken user sınıfımı çağırmış oluyorum.
    return $this->isim;
} 
public function topla($num1, $num2){
//return $num1+$num2;
$this->toplam = $num1+$num2;
}

}

//bu sınıfın içindeki özellikleri ve metodları kullanbilmek için sınıfı başlatmam gerekiyor.
$user = new user();
echo $user->isim . "<br>";
echo user::yas . "<br>";
//artık yazdıramıyoruz. toplam özelliğine sonucu aktarmış oluyor. Bununla işlemleri içinde yaptırırız.
//echo $user->topla(10,20);

$user -> topla(10,20);
echo $user->toplam;

?>