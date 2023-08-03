<?php
//CLASS LARDA STATIC TANIMI
//static olarak belirlediğimiz değerler sıfırlanmaz son halinde kalır.

class User{
    public static $isim;
    public $soyisim;
    public static function setIsim($isim){
       // echo $isim;
       //sınıfın içerisindeki özelliklere static fonksiyonlarda this yerine self anahtar sözcüğü kullanılır.
       self::$isim=$isim;
       /*
       soyisim gibi static olmayan özelliklere ulaşmak için önce self fonksiyonunu başlatmak gerekir:

       $self=new self();
       $self->soyisim;
       
       */
    }
    public static function getIsim(){
        return self::$isim;
    }
}
/*
User::$isim='şahin';
//echo User::$isim;


//User::setIsim("Sümeyye ECE");
//Sınıfı sonradan başlattığımızda değerler static olduğu için kaybolmaz.

$User = new User();
$User->soyisim="ERSEVER";
echo User::$isim;
*/

User::setIsim('Şahin Ersever');
echo User::getIsim();
?>