<?php
function ucgen($sayi){
$satir=1;
while($sayi >= $satir){
    $daire = " ";
    for($i=1;$i<=$satir;$i++){
        $daire .= "O";
    }
    echo $daire . "<br>";
    $satir++;
}
}
ucgen(10);

?>