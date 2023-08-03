<?php
/*
ZİNCİRLEME
Bir sınıf içerisinde methodlar geriye sınıfın kendisini döndürdüğünde -> ile devam ederek ardına zincirleme olarak başka bir method daha alabilirler.

Aslında işin mantığı methodun geriye o sınıfın kendisini döndürüyor olmasıdır. Aşağıdaki örnekte bunu daha iyi anlayabiliriz.
*/

class islem{
    public $sayi1;
    public $sayi2;

 
public $toplam;
public $carpim;
public $bolum;
public $fark;

    public function topla(){ 
        return $this -> sayi1 + $this -> sayi2; 
    }
    public function carp(){  
        return $this -> sayi1 * $this -> sayi2; 
    }
    public function bol(){   
        return $this -> sayi1 / $this -> sayi2; 
    }
    public function cikar(){ 
        return $this -> sayi1 - $this -> sayi2; 
    }


}

$islem=new islem();
$islem -> sayi1 = 10;
$islem -> sayi2 = 5;


echo $islem -> topla(). '<br>';
echo $islem -> carp(). '<br>';
echo $islem -> bol(). '<br>';
echo $islem -> cikar(). '<br>';
?>