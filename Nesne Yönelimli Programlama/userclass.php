<?php
class user{

    public $isim;
    public $soyisim;
    public $eposta;
    public $yas;
    
    public function addUser($isim,$soyisim,$eposta,$yas){
    $this->isim=$isim;
    $this->soyisim=$soyisim;
    $this->eposta=$eposta;
    $this->yas=$yas;
    
    }

}

$user=new user();
$user->addUser('Sümeyye','Ece','sumeyye@gmail.com', 25);

echo $user->isim . "<br>";
echo $user->soyisim . "<br>";
echo $user->eposta . "<br>";
echo $user->yas . "<br>";



?>