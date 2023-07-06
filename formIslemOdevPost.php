<?php

//print_r($_POST);

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
?>