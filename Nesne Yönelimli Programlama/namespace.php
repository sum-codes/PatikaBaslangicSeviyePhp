<?php
/*
NAMESPACE KULLANIMI
Kullanılması zorunlu değildir.
Aynı isimli sınıfların ayırt edilmesini sağlar.
Geleneksel olarak anadizinden bulunduğu klasöre kadar uzanan bir namespace tanımlanır.
*/

//Aynı klasör altındaki aynı isimli iki sayfa gerektiğinde karışıklık olup hata vermemesi için namespace kullanılır.

require 'app/controller/Home.php';
require 'app/View/Home.php';

$homeControl = new app\controller\Home();
echo "<br>";
$homeView = new app\view\Home();



?>