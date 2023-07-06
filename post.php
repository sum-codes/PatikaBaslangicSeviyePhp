<?php
error_reporting(error_level:E_ALL);

print_r($_POST);
echo"<br>";
echo $_POST["isim"] . "<br>";
echo $_POST["soyisim"] . "<br>";
echo"-----------------------" . "<br>";

/*
$isim = trim($_POST["isim"]);
$soyisim = trim($_POST["soyisim"]);
echo $isim. " " . $soyisim;
*/
/*
$dizi = array_map(function(){
    return htmlspecialchars(trim($e)); 
    //Warning: Undefined variable $e in C:\xampp\htdocs\PatikaBaslangicSeviyePhp\post.php on line 15
},$_POST);
*//*
function filtre($p){
    return htmlspecialchars(trim($p));
}*/

$dizi = array_map(function ($p){return htmlspecialchars(trim($p));} , $_POST); //callback:"filtre" çalışmadı

echo "<pre>";
print_r($dizi);


/*
$_POST bir süper global değişken olup, PHP'de POST yöntemiyle gönderilen verilere erişmek için kullanılır. HTML formu üzerinden kullanıcının gönderdiği verileri almak için $_POST değişkeni kullanılır.
HTML formunda <form> etiketi içinde method="post" olarak belirtilirse, form verileri POST yöntemiyle sunucuya gönderilir. Bu durumda, PHP kodunda $_POST süper global değişkeni kullanılarak form verilerine erişilebilir.
$_POST süper global değişkeni, form verilerini içeren bir assoziatif dizi olarak temsil edilir. Form alanlarının name özelliği, dizi anahtarları olarak kullanılır ve kullanıcının girdiği değerler bu anahtarlarla ilişkilendirilir.

$_POST süper global değişkeni, POST yöntemiyle gönderilen form verilerine erişmek için kullanılır. Bu sayede, kullanıcının formu doldurarak gönderdiği verileri PHP kodunda kullanabilirsiniz.
*/

/*
htmlspecialchars() işlevi, HTML özel karakterlerini uygun HTML kodlarına dönüştürmek için kullanılır. Bu karakterler, HTML belgelerinde özel anlamlara sahip olan karakterlerdir. HTML özel karakterleri, metin içinde doğrudan kullanıldığında hatalı HTML çıktılarına veya güvenlik açıklarına neden olabilir.

htmlspecialchars() işlevi, aşağıdaki özel karakterleri ilgili HTML kodlarına dönüştürür:

< karakteri &lt; ile değiştirilir.
> karakteri &gt; ile değiştirilir.
& karakteri &amp; ile değiştirilir.
" karakteri &quot; ile değiştirilir.
' karakteri &#039; ile değiştirilir.
Bu dönüşümler, HTML kodunda bu karakterlerin doğru şekilde görüntülenmesini ve HTML etiketleriyle çakışma olasılığını engeller.

Örneğin, kullanıcı girişi gibi metinleri HTML belgesine yerleştirirken htmlspecialchars() işlevini kullanmak önemlidir. Bu şekilde, kullanıcının istemeden HTML kodunu etkilemesi veya potansiyel bir güvenlik açığı oluşturması engellenir.
*/

/* 
htmlspecialchars_decode() işlevi, htmlspecialchars() veya htmlentities() gibi işlevlerle dönüştürülmüş HTML özel karakterlerini orijinal hallerine geri dönüştürmek için kullanılır.

HTML özel karakterleri, htmlspecialchars() veya htmlentities() gibi işlevlerle HTML kodlarına dönüştürüldüğünde, metin içindeki <, >, &, ", ' gibi karakterler belirli kodlarla değiştirilir. Bu değişiklikler, özel karakterlerin HTML belgesinde doğru şekilde görüntülenmesini sağlar. Ancak, bazen bu dönüşümü geri almak ve özel karakterleri orijinal hallerine döndürmek gerekebilir.

htmlspecialchars_decode() işlevi, bu dönüşümü gerçekleştirir ve HTML özel karakterlerini orijinal hallerine dönüştürür. Bu işlev, özellikle dönüştürülmüş bir metni düz metne veya orijinal formuna geri döndürmek için kullanışlıdır.
*/
/*
html_entity_decode() işlevi, htmlspecialchars() veya htmlentities() işlevleriyle dönüştürülmüş HTML özel karakterlerini orijinal hallerine geri dönüştürmek için kullanılır.

HTML özel karakterleri, htmlspecialchars() veya htmlentities() işlevleriyle HTML kodlarına dönüştürüldüğünde, bazı karakterler HTML özel kodlarıyla temsil edilir. Örneğin, < karakteri &lt; ile, > karakteri &gt; ile temsil edilir.

html_entity_decode() işlevi, bu HTML özel kodlarını orijinal karakterlere dönüştürür. Bu işlev, özellikle dönüştürülmüş metni orijinal metne geri döndürmek veya HTML özel karakterleri doğrudan görüntülemek için kullanılır.
*/

/*
strip_tags() işlevi, bir metinden HTML ve PHP etiketlerini kaldırmak için kullanılır. Bu işlev, bir metindeki etiketleri, etiket içerikleriyle birlikte kaldırarak sadece düz metni elde etmenizi sağlar.

HTML ve PHP etiketleri, metindeki biçimlendirme veya kodlama için kullanılan özel işaretlerdir. Örneğin, <h1>, <p>, <div>, <strong>, <a> gibi HTML etiketleri veya <?php, <? echo, <?php echo gibi PHP etiketleri, belirli işlevlere veya kod parçalarına sahiptir. Ancak bazen, bu etiketlerin metin içerisinde görünmesini istemeyebilirsiniz ve yalnızca düz metni elde etmek isteyebilirsiniz.

strip_tags() işlevi, bu durumda kullanılabilir. İşlev, belirtilen metinden tüm HTML ve PHP etiketlerini kaldırır ve yalnızca düz metni geri döndürür.
*/



?>