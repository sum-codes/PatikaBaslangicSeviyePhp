<?php

//print_r($_POST);
/*

$number = $_POST["number"];


function control($number){

if(empty($number)){
    echo"Boş değer girilemez.";
}
else{
    function control($num){
        if($num % 3 == 0){
            echo "Girilen değer 3 e bölünebilir.";
        }
        else
        {
            $remainder = $num % 3;
            $valueDivisible = $num - $remainder + 3;
            echo "Girilen değer 3 e bölünemez. En yakin 3 e bölünebilen değer: $valueDivisible";
        }
    }
}
}
control($number);
*/

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Formdan sayı değerini alın
    $number = $_POST["number"];

    // Girilen değerin boş olup olmadığını kontrol edin
    if (empty($number)) {
        echo "Değer boş olamaz.";
    } else {
        // 3 ile bölümünden kalanı kontrol eden fonksiyon
        function kontrolEt($num) {
            if ($num % 3 == 0) {
                echo "Girilen değer 3'e bölünebilir.";
            } else {
                $kalan = $num % 3;
                $bölünebilir_değer = $num - $kalan + 3;
                echo "Girilen değer 3'e bölünemez. En yakin 3'e bölünebilen değer: $bölünebilir_değer";
            }
        }

        // Girilen sayıyı kontrol et
        kontrolEt($number);
    }
}


?>