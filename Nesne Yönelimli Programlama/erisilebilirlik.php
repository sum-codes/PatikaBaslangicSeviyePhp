<?php
class user{

    public $eposta;
    private $isim;
    protected $soyisim;

    //private yaparsak sınıf dışından erişmeye çalıştığımızda hata verir.
    //protected, dışarıdan erişilemez. Sınıf içinde erişilebilir. Miras alma yoluyla kullanılabilir.

    //dışarıdan kullanabilmek için getter ve setter ayarlamalıyız.

    public function getEposta():string
    {
        return $this->eposta;
    }

    public function setEposta($eposta)
    {
        $this->eposta=$eposta;
    }

    public function getIsim()
    {
        return $this->isim;
    }

    public function setIsim($isim)
    {
        $this->isim=$isim;
    }
    public function getSoyisim()
    {
        return $this->soyisim;
    }

    public function setSoyisim($soyisim)
    {
        $this->soyisim=$soyisim;
    }
}

$user=new user();

$user->setIsim('Sümeyye');
$user->setEposta('Ece@gmail.com');
$user->setSoyisim('Ece');

echo $user->getIsim() . "<br>";
echo $user->getSoyisim() . "<br>";
echo $user->getEposta() . "<br>";

?>