<?php
//dosya oluşturma:
//touch(filename:'test.txt');

//dosya silme:
//unlink(filename: 'test.txt');


//dosya açma: fopen()
//dosya kapama: fclose($file)
//fopen(filename:'test.txt',ne için açiyoruz );

//$file=fopen(filename:'test.txt', mode:'w'); 
//dosyanın içeriğini siler ve baştan veri yazarız. yazdıklarımızı kaydetmez.

/*
Dosya Erişim Modları - Dosya Kipleri

r : Read işlemi. Dosyanın sadece içeriğinin okunması gerektiğini belirtir.
r+ : Dosyanın içeriğinin he okunabilmesi hem de yazılabilmesinin gerektiğini belirtir.
w : Dosyaya sadece yazma işleminin yapılabilmesinin gerektiğini belirtir. Dosyanın içeriği tamamen silinir ve baştan itibaren yazmaya başlanır. Dosya belirtilen adreste yok ise yeniden oluşturulur.
w+ : Dosyaya hem yazma işleminin yapılabilmesi hem de dosya içeriğinin okunabilmesinin gerektiğini belirtir. Dosyanın içeriği silinir ve baştan veri yazma işlemi gerçekleştirilir. Dosya belirtilen adreste yok ise yeniden oluşturulur.
a : Dosya içerisine sadece veri eklenebilmesi gerektiğini belirtir. Dosyanın içeriği silinmez, içeriğin sonuna veri eklenir. Dosya belirtilen adreste bulunmuyorsa yeniden oluşturulur.
a+ : Dosyaya hem veri eklenebilmesini hem de verinin okunabilmesinin gerektiğini belirtir. Dosyanın içeriği silinmez, içeriğin sonuna veri eklenir. Dosya belirtilen adreste yok ise yeniden oluşturulur.
x : Dosyanın oluşturulması sağlanır ve oluşturulan dosyanın içerisine veri yazmak için açılması gerektiğini belirtir. Aynı isimde bir dosya belirtilen adreste var ise fopen fonksiyonundan ‘false’ değeri döner.
x+ : Dosyanın oluşturulması sağlanır ve içerisine hem veri yazma hem de verileri okunması gerektiğini belirtir. Dosya belirtilen adreste aynı isimde zaten var ise fopen fonksiyonundan ‘false’ değeri döner ve hata oluşur.

*/
/*
$file=fopen(filename: 'test.txt',mode:'a+');

    while($satir=fgets($file)){
        echo $satir."<br>";
    }
fclose($file);
*/

//Bir diğer dosya okuma fonksiyonu fread() fonksiyonudur.


//fread fonksiyonu verilerin tamamını okurken, fgets fonksiyonu satır satır okur.

//fputs() ve fwrite() donksiyonları dosyaya yazmamızı sağlar.
/*
$file=fopen(filename: 'test.txt',mode:'a+');
fwrite($file,data:"YENİ VERİ");
fclose($file);
$file=fopen(filename: 'test.txt',mode:'a+');

$size = filesize(filename: 'test.txt');  //dosya boyutunu öğreniriz.
echo fread($file, $size); //dosyanın boyutu kadar veri getirir.
fclose($file);
*/
/*
$file=fopen(filename: 'test.txt',mode:'r');
while($satir=fgets($file)){
    print_r(feof($file)); //file end of fonksiyonu true -1- gelir.
    echo "------";
    echo $satir."<br>";
}
fclose($file);
*/
//ŞU ŞEKİLDE DE YAZILABİLİR.....
/*
$file=fopen(filename: 'test.txt',mode:'r');
while(!feof($file)){
    echo fgets($file)."<br>";
}
fclose($file);
*/

/*
Varlık Kontrolü
file_exists() Dosya ve dizin fonksiyonlarından birisi olan file_exists fonksiyonu ile PHP’de dosya veya dizin varlığını kontrol eder.
*//*
$kontrol = file_exists(filename: 'test.txt');
var_dump($kontrol); //bool(true)
*/
/*
is_file() fonksiyonu, içerisine girilen adresin dosya olup olmadığını kontrol etmek için kullanılır.
*/
/*
$kontrol = is_file(filename: 'test.txt');
var_dump($kontrol); //bool(true)
*/

/*
Dosya Yazma 2. Yöntem:

file_put_contents();

İlk parametre verinin ekleneceği dosya, ikinci parametre eklenecek veri, üçüncü parametre ise veri ekleme işleminin türünü belirten değer. Üçüncü parametrenin kullanılması zorunlu değildir. Üçüncü parametreye FILE_APPEND değeri tanımlanır ise dosyaya veri eklenirken dosyadaki verinin tamamen yeni veri ile değişmesini istemeyip, varolan verinin sonrasına eklenmesini istemiş oluyoruz.

$sonuc = file_put_contents('dosyalar/metin.txt', 'icerik',FILE_APPEND); //file append, dosyanın sonuna ekler.
echo $sonuc; //çıktı: 6
*/
/*
file_put_contents(filename: 'test.txt', data: "\n Yeni İçerik, file put contents ile eklendi.", flags: FILE_APPEND);
*/
/*
$get = file_get_contents(filename: 'test.txt');
print_r($get); //dosya içeriğini tek seferde ekrana getirir.
*/


//Yalnızca .txt değil .php dosyası da oluşturabiliriz.
/*
$dosya = "<?php ";
$dosya .= '$isim = "Şahin"; ';
$dosya .= 'echo $isim; ';

file_put_contents(filename:'a.php', $dosya); //bu satırda hata veriyor.
*/



?>