<?php
define('ISIM','Selim');
echo ISIM;
//Bir sabit define() işlevi kullanılarak tanımlanabilir. Bir sabit tanımlandıktan sonra asla değiştirilemez ve tanımsız yapılamaz.
echo "<br>";
/*Harf ve alt çizgi ile başlar.
Obje hariç tüm veri tiplerini tutabilir.
Sayı ile başlayamaz.
Türkçe karekter içerebilir.
Geleneksel olarak, sabit isimleri daima büyük harfle yazılır.*/
//define('SABIT_ADI','TUTULACAK_DEGER'); echo SABIT_ADI;
//define('ISIM','Ayşe'); Yeni değer aynı sabite atanamaz.
define('ISIM2','Ayşe'); //ISIM2 olarak yeni sabit tanımladım.
echo ISIM2;
//küçük harf ile de tanımlanabilir ama tavsiye edilen yöntem değil.
?>