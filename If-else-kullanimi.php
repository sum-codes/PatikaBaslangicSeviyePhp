<?php
$a=3;
echo ($a < 2) ? "a küçüktür 2" : "a küçük değildir 2"; //ternary
echo"<br>";
echo"--------------------------------------";
echo"<br>";
/*
IF bir kod bölümünün belirli bir koşula bağlı olarak çalışmasını sağlar; ELSE ise koşul sağlanmadığında çalışacak kısımdır.
Koşula bağlı çalışacak kod parçasında tek komut çalışacaksa süslü parantez kullanmanız gerekmez.
elseif deyimi ise koşullu ifademizde birden fazla koşula bağlı olarak farklı kod bölümleri çalıştırmamızı sağlar.
Ternary Operatör Kullanımı:
Php ternary operatörü if-else yapısının kısa kulanımıdır diyebiliriz türkçe olarak çevriside üçlü operatör manasındadır.
IF Farklı Sözdizimi:
IF Bloklarını alternatif olarak aşağıda ki gibi de kullanabilirsiniz.

    if($a == 1): 
            echo "a eşittir 1e";
    endif;
*/
if($a == 1) 
        echo "a eşittir 1e";
    elseif($a == 2) 
        echo "a eşittir 2ye";
    elseif($a == 3) 
        echo "a eşittir 3e";
    else 
        echo "a eşit değildir 1e 2ye ve 3e";
?>
