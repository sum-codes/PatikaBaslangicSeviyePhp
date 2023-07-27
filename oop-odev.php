<?php

// Ana Sekil Sınıfı
class Sekil {
    public function alan() {
        // Alan hesaplama işlemi ana sınıfta tanımlanmamıştır.
        // Alan hesaplama işlemleri alt sınıflarda yapılacaktır.
    }

    public function cevre() {
        // Çevre hesaplama işlemi ana sınıfta tanımlanmamıştır.
        // Çevre hesaplama işlemleri alt sınıflarda yapılacaktır.
    }
}

// Dikdörtgen Sınıfı
class Dikdortgen extends Sekil {
    private $uzunluk;
    private $genislik;

    public function __construct($uzunluk, $genislik) {
        $this->uzunluk = $uzunluk;
        $this->genislik = $genislik;
    }

    public function alan() {
        return $this->uzunluk * $this->genislik;
    }

    public function cevre() {
        return 2 * ($this->uzunluk + $this->genislik);
    }
}

// Üçgen Sınıfı
class Ucgen extends Sekil {
    private $a;
    private $b;
    private $c;

    public function __construct($a, $b, $c) {
        $this->a = $a;
        $this->b = $b;
        $this->c = $c;
    }

    public function alan() {
        // Heron formülü ile üçgen alanını hesaplayalım
        $s = ($this->a + $this->b + $this->c) / 2;
        return sqrt($s * ($s - $this->a) * ($s - $this->b) * ($s - $this->c));
    }

    public function cevre() {
        return $this->a + $this->b + $this->c;
    }
}

// Kare Sınıfı
class Kare extends Dikdortgen {
    public function __construct($kenar) {
        parent::__construct($kenar, $kenar);
    }
}

// Şekilleri kullanma örnekleri
$dikdortgen1 = new Dikdortgen(5, 3);
echo "Dikdörtgen Alanı: " . $dikdortgen1->alan() . "\n";
echo "Dikdörtgen Çevresi: " . $dikdortgen1->cevre() . "\n";

$ucgen1 = new Ucgen(3, 4, 5);
echo "Üçgen Alanı: " . $ucgen1->alan() . "\n";
echo "Üçgen Çevresi: " . $ucgen1->cevre() . "\n";

$kare1 = new Kare(4);
echo "Kare Alanı: " . $kare1->alan() . "\n";
echo "Kare Çevresi: " . $kare1->cevre() . "\n";
?>




?>