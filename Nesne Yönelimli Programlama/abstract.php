<?php
/*
Abstract(Soyutlama) Kullanımı
Soyutlanmış sınıflar içerisinde soyut methodlar barındırır.
Soyutlanmış sınıftan türetilen sınıflar soyut sınıf içerisinde ki soyut methodları bulundurmak zorundadır.


Özellikleri

Soyut methodlar ve sabitler içerebilir.
Normal methodlar, özellikler ve sabitler içerebilir.
public, protected ve private olarak tanım yapılabilir.
Aynı sınıf sadece bir abstract sınıftan türetilebilir.

*/
//Bu sınıftan sonra üretilecek sınıflar için şablon oluşturuyoruz diyebiliriz.
abstract class Urun{

    public $urunAdi;
    public $urunFiyat;
    public $urunVergi;

    abstract public function urunAdi($urunAdi);
    abstract public function urunFiyat($urunFiyat);
    abstract public function urunVergi($urunVergi);

    public function urunEkle(){

        echo 'Urun adi:'.$this->urunAdi . "<br>";
        echo 'Urun fiyat:'.$this->urunFiyat . "<br>";
        echo 'Urun vergi:'.$this->urunVergi . "<br>";
         
    }
}
class Icecek extends Urun{
    public function urunAdi($urunAdi)
    {
        $this->urunAdi=$urunAdi;
    }
    public function urunFiyat($urunFiyat)
    {
        $this->urunFiyat=$urunFiyat;
    }
    public function urunVergi($urunVergi)
    {
        $this->urunVergi=$urunVergi;
    }
}
class Tekstil extends Urun{
    public function urunAdi($urunAdi)
    {
        $this->urunAdi=$urunAdi;
    }
    public function urunFiyat($urunFiyat)
    {
        $this->urunFiyat=$urunFiyat;
    }
    public function urunVergi($urunVergi)
    {
        $this->urunVergi=$urunVergi;
    }
}
$Icecek = new Icecek();

$Icecek->urunAdi('Ayran');
$Icecek->urunFiyat('10');
$Icecek->urunVergi('8');

$Icecek->urunEkle();

$Tekstil = new Tekstil();

$Tekstil->urunAdi('Etek');
$Tekstil->urunFiyat('100');
$Tekstil->urunVergi('10');

$Tekstil->urunEkle();
?>