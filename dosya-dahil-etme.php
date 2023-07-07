<?php

include_once 'a.php';
echo "<br>";
require_once 'test.txt';
echo "<br>" . "---------------------------" . "<br>";
$dizi=include 'ab.php';
print_r($dizi);


//getirdiğimiz dosyanın uzantısının ne olduğu önemli değil. php kodu olarak çalışır. .ece bile olabilir.


/*
require 'test.txt';
require 'a.php';
*/

/*
Bir php sayfasına bir başka betik ya da herhangi bir dosya dahil etmek için kullanılan fonksiyonlar vardır. Bu fonksiyonlar yardımı ile bir php sayfasına başka bir php sayfası dahil edilebilir ve dahil edilen php sayfasındaki değişken ve fonksiyonlar kullanılabilir.

require ve require_once işlemlerinde dahil edilmek istenen dosya bulunamazsa program "FATAL ERROR" verir ve çalışmayı durdurur. include ve include_once işlemlerinde dahil edilmek istenen dosya bulunamazsa program "WARNING" verir ve çalışmaya devam eder.

require_once include_once ile dahil edilen dosya sadece bir kere dahil edilebilir.

include 'dosya.php';

include_once 'dosya.php';

require 'dosya.php';

require_once 'dosya.php';

şeklinde kullanılır.
*/


?>