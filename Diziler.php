<?php 
/*
Diziler PHP'de değerleri anahtarlarla ilişkilendiren bir veri türüdür.

Array'leri iki şekilde tanımlayabiliriz.

    $a = array('elma','armut')
veya

    $a = ['elma','armut']
şeklinde tanımlanabilir.

Dizileri print_r(dizi) veya var_dump(dizi) şeklinde ekrana yazdırabiliriz.
*/
$a = ['elma','armut'];
    echo "<pre>"; //tek sıra değil de alt alta yazdırır.
print_r($a);

//İfadenin çıktısı : Array ( [0] => elma [1] => armut )
echo"<br>";
//Dizilerin anahtarları belirtilmediğinde 0'dan başlayarak sırasıyla anahtar değerleri otomatik atanır.
echo $a[0];
echo"<br>";

$kisi = [
    'isim'/*anahtarları (key) kendimiz ekedik. */ => 'Sahin',
    'soyisim' => 'ERSEVER',
    'dogumtarihi' => '10.01.1993'
];

print_r($kisi);
echo"<br>";
var_dump($kisi); //daha detaylı bir döküm hazırlar.
echo"<br>";

echo "Merhaba benim adim " . $kisi['isim'] . " " . $kisi['soyisim'] . "  Doğum tarihim " . $kisi['dogumtarihi'];
echo"<br>";
echo"-------------------------------------------------------------";
echo"<br>";
?>
<?php
//$ucan_hayvanlar=['Kartal','Güvercin','Şahin'];
/*
Çok Boyutlu Diziler
Dizileri tanımlarken değerleri anahtarlarla ilişkilendiren bir veri türüdür demiştik; bazı durumlarda bir dizi içerisinde bir anahtara karşılık başka bir diziyi barındırabilir, haliyle bu dizi de başka bir diziyi...
*/
$hayvanlar=[
    'Uçan Hayvanlar'=>['Kartal','Güvercin','Şahin'],
    'Sürüngen Hayvanlar'=>[
        'Yilan',
        'Timsah',
        'Kertenkele'=>[
            'keler','bukalemun','geko','agama'
        ]
        ]
];
echo "<pre>";
print_r($hayvanlar);
echo"<br>";
echo $hayvanlar['Uçan Hayvanlar'][2];
echo"<br>";
echo $hayvanlar['Sürüngen Hayvanlar']['Kertenkele'][1];

/*
$hayvan_gruplari = [
    'surungen_hayvanlar' => [
        'Yılan',
        'Kertenkele' => [
            'keler', 'bukalemun', 'geko', 'agama'
        ]
    ],
    'ucabilen_hayvanlar' => ['Kartal','Güvercin','Şahin']
];

echo $hayvan_gruplari['surungen_hayvanlar']['Kertenkele'][1];

// Ekran Çıktısı
bukalemun
*/
?>