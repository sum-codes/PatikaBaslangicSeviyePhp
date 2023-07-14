<?php
session_start();
if(isset($_SESSION['kullanici']['isim'])){
    echo "Merhaba " . $_SESSION['kullanici']['isim'] . ' hos geldiniz.';
    echo "<pre>";
    print_r($_SESSION); //verilerin tamamını ekrana yazdırdık.
}
else
{
    echo 'Lütfen oturum açiniz.';
}


/*echo $_SESSION['isim'];
echo"<br>";
//isset fonksiyonu, bir değişkenin var olup olmadığını kontrol eder.
if(isset($_SESSION['isim'])){
echo 'Merhaba ' . $_SESSION['isim']. ' hos geldiniz.';
}
else{
    echo 'Lütfen oturum açiniz.';
}*/
?>