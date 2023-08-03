<?php
//final olarak tanımlanan sınıflar ve methodlar kalıtım yoluyla çoğaltılamaz.
//final, method un son halinin o olduğu ve yeniden oluşturulamayacağı anlamına gelir.

class Bir{
    public function methodBir(){
        echo 'MethodBir' . ' ';
    }
}

final class Iki extends Bir{ //Fatal error alınır.
    public function methodIki(){
        echo 'Method İki' . ' ';
    }
}
class Uc extends Iki{
    public function methodUc(){
        echo 'Method Üç';
    }
}

$Uc=new Uc();

$Uc->methodBir();
$Uc->methodIki();
$Uc->methodUc();

?>