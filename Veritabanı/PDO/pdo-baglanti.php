<?php

$dbh = new PDO('mysql:host=localhost;dbname=test', "root", "");
if($dbh){
    echo"Veritabani baglantisi yapildi.";

    $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
}

/*
HATA YAKALAMA İÇİN:

try{
$dbh = new PDO('mysql:host=localhost;dbname=test', "root", "");
}
catch(PDOException $e)
{
    echo $e->getMessage();
}
*/
/*
PYCHARM KULLANIMI:

try{
    $db = new PDO(dsn:'mysql:host=localhost;', username:"root",password: "");
    $db->query(statement:"USE test";);
    $db->query(statement:"CREATE TABLE pdoile(
        id INT(1),
        test VARVHAR(50),
        PRIMARY KEY (id)
    );");
    }
    catch(PDOException $e)
    {
        echo $e->getMessage();
    }

    database bağlantısı yapılırken db ismini yazmadan şu şekilde yapılır:
    CREATE TABLE test.pdoile
    yazarız.
*/



?>