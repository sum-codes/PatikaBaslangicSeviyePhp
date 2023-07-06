<?php
error_reporting(error_level:E_ALL);

echo "<pre>";

print_r($_GET);

/*
$_GET bir süper global değişken olup, PHP'de GET yöntemiyle gönderilen verilere erişmek için kullanılır. GET yöntemi, verilerin URL parametreleri olarak aktarıldığı durumlarda kullanılır.

Bir URL'de parametreler ? işaretinden sonra belirtilir ve parametreler anahtar=değer şeklinde ifade edilir. Bu parametreleri PHP kodunda kullanabilmek için $_GET süper global değişkenini kullanırız.

$_GET süper global değişkeni, URL parametrelerini içeren bir assoziatif dizi olarak temsil edilir. Parametrelerin anahtarları $_GET dizisindeki anahtarlarla aynıdır ve değerleri bu anahtarlarla ilişkilendirilir.

$_GET süper global değişkeni, GET yöntemiyle gönderilen URL parametrelerine erişmek için kullanılır. Bu sayede, URL üzerinden gönderilen verilere PHP kodunda erişebilir ve bu verileri işleyebilirsiniz.


Form göndermek için iki yöntem vardır: GET ve POST . Tüm adlar ve/veya değerler HTTP isteğinin gövdesine gömülü olduğundan,
bir formdan POST yöntemiyle gönderilen bilgiler diğerleri tarafından görülmez. Ayrıca, gönderilecek bilgi miktarında herhangi bir sınırlama yoktur.
Ayrıca POST, dosyaları sunucuya yüklerken çok parçalı ikili giriş desteği gibi gelişmiş işlevleri destekler.
Ancak, gönderilen değerler görünmediğinden sayfaya yer işareti koymak mümkün değildir.

Yöntem kullanılarak bir form aracılığıyla gönderilen bilgiler herkes tarafından görülebilir (tüm değişken adları ve değerleri ) içinde görüntülenir . ayrıca gönderilebilecek bilgi miktarına da sınırlar koyar - yaklaşık 2000 karakter. Bununla birlikte, değişkenler URL'de görüntülendiğinden, bazı durumlarda yararlı olabilecek şekilde sayfaya yer işareti koymak mümkündür. GET URL GET

GET, şifreleri veya diğer hassas bilgileri göndermek için kullanılmalıdır! ASLA POST veya GET kullanırken, form verilerinin filtreleme ve işleme yoluyla uygun şekilde doğrulanması, formunuzu bilgisayar korsanlarından ve istismarlardan korumak için hayati önem taşır!
*/
?>