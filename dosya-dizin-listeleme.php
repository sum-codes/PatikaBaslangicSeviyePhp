<?php
//scandir() glob() Kullanımı

//echo __DIR__; //Çalıştırdğımız dosyanın tam dosya yolunu gösterir.

$basedir = require 'ayar.php';
//echo $basedir . "<br>";
echo "Bulunduğumuz klasördeki bütün dosya ve dizinleri listeler:" . "<br>";
$array=scandir(directory: '.');
echo "<pre>";
print_r($array);
echo "<br>" . "------------------------------------------------" . "<br>";


//şuankki kullandığım yerde yok ama üstteki kod eğer klasör olsaydı onun içindekileri gösterirken aşağıdaki kodda bulunduğu klasör ve soldaki diğer klasörlerin isimlerini listeler.
$array2=scandir($basedir);
echo "<pre>";
print_r($array2);
echo "<br>" . "------------------------------------------------" . "<br>";

echo "Sadece dosya yolunu getirir" . "<br>";
$array3 = glob($basedir);
print_r($array3); 
echo "<br>" . "------------------------------------------------" . "<br>";

echo "Dosyaları listelemek için şunu yazmalıyız." . "<br>";
$array4=glob(pattern:$basedir. '/*');
print_r($array4);

echo "glob kullanırken şunu yapabiliriz. Örneğin sadece php uzantılı dosyaları getirsin:"  . "<br>";
$array5 = glob(pattern:$basedir. '/*.php');
print_r($array5);
echo "<br>" . "------------------------------------------------" . "<br>";

echo ".php ve .txt uzantılarını istiyorsak süslü parantezlerle birleştirebiliriz." . "<br>";
$array6 = glob(pattern:$basedir. '/*.{php,txt}', flags:GLOB_BRACE);
print_r($array6);

echo "<br>" . "------------------------------------------------" . "<br>";

echo "istersek basedir yani listelenen dosya adının yanındaki yolu kaldırabiliriz:" . "<br>";
$dizi = array_map(function($e) use ($basedir){
    return str_replace($basedir.'/',' ',$e);
},$array5);

print_r($dizi);

echo "<br>" . "------------------------------------------------" . "<br>";

echo "dosya ve klasörlerin isimleri listelenmiş oldu." ."<br>";
function listAll($dir){
    $files = scandir($dir);
    foreach ($files as $file):
        echo $file . "<br>";
    endforeach;
}
listAll($basedir);

echo "<br>" . "------------------------------------------------" . "<br>";

echo "ul ve li içerisine alıp listeleyebiliriz." ."<br>";
function listAll2($dir){
    $files=scandir($dir);
    echo "<ul>";
    foreach ($files as $file2): 
if($file2 !='.' && $file2!='..'){

    echo "<li>";
        echo $file2;
        if(is_dir(filename:$dir. '/' . $file2)) //directory olup olmadığını kontrol eden fonksiyon.
        listAll2(dir:$dir. '/' .$file2);
        echo "</li>";
}
    endforeach;
    echo "</ul>";
}
listAll2($basedir);


?>