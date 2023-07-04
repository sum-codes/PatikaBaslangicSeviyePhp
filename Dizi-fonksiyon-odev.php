<?php
function createRandomArray($planets, $number) {
    // clear null elements
    $planets = array_filter($planets);

    // Create new array by selecting random values from array
    $randomArray = array_map(function () use ($planets) {
        return $planets[array_rand($planets)];
    }, array_fill(0, $number, null));

    return $randomArray;
}
$planets = ["Mercury", "Venus", "Earth", "Mars", "Jupiter", "Saturn", "Uranus", "Neptune", "", "", NULL];
$newplanets = createRandomArray($planets, 3);
echo "<pre>";
print_r($newplanets);


/*
LARAVEL DE KULLANIMI

function isNotEmpty (?string $s){
    return $s != '' && $s !=null;
}

public function testCreateArray(){
    $planets = ["Mercury", "Venus", "Earth", "Mars", "Jupiter", "Saturn", "Uranus", "Neptune", "", "", NULL];
    $newplanets = array_filter($planets,fn(?string $s) => $s!=null);
    dd($newplanets);    
}

$newplanets=array_map (fn(?string $s) => $s. 'j', $planets);
dd($newplanets);

$newplanets =array_rand($planets);
dd($planets [$newplanets]);
*/
?>