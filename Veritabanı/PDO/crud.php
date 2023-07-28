<?php
$dbh = new PDO('mysql:host=localhost;dbname=test', "root", "");
if($dbh){
    echo"Veritabani baglantisi yapildi.";

    $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
}

//crud: create, read, update ,delete.





?>