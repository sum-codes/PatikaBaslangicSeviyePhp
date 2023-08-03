<?php
//Bir sınıf başlatıldığında çalışacak ilk method __construct() -yapıcı- son method __destruct() -yıkıcı- methodlarıdır.
//Örneğin kurucu method içinde database bağlantısı yapabiliriz. Yıkıcı methodda bu bağlantıyı sonlandırabilriz. Veya fopen fclose kullanılabilir.
/*
class User{

    public function __construct(){
        echo 'Kurucu method çalisti.' . '<br>';
    }
    public function __destruct(){
    echo 'Yikici method çalisti.';
    }
    public function selam(){
        echo 'Selam naber?' . '<br>';
    }
}
$User=new User();
$User->selam();
*/
//Sınıf içerisine gönderdiğimiz parametreler construct a gitmiş oluyor.
class User2{
    private $isim;
    private $soyisim;

    public function __construct($isim, $soyisim){
        $this->isim=$isim;
        $this->soyisim=$soyisim;
    }
    public function __destruct(){
        $this->isim=null;
        $this->soyisim=null;        
    }
    public function isimYaz(){
        echo $this->isim.' ' .$this->soyisim;
    }
}
$User=new User2('Sümeyye', 'Ece');
$User->isimYaz();

?>