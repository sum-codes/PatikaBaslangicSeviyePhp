<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <meta name="viewport">
  <meta name="keywords" content="">
  <title>POST - FORM İŞLEMLERİ</title>
</head>
<body>
<!-- <form action="post.php" method="post"> -->

<!--   <form action="get.php" method="get"> -->

<form action="request.php?islem=ekle" method="post">

<input type= "text" name="isim" placeholder="İsim">
<input type= "text" name="soyisim" placeholder="Soyisim">
<hr>
<label>Diller</label><br>
<label>PHP</label>
<input type="checkbox" value="php" name="dil[1]"><br>
<label>NODEJS</label>
<input type="checkbox" value="node" name="dil[2]"><br>
<label>JS</label>
<input type="checkbox" value="js" name="dil[3]"><br>
<button type="submit">Gönder</button>

</form>

</body>
</html>
