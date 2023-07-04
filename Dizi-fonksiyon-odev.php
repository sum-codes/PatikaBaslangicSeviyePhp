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
echo "<pre>";
$planets = ["mercury", "venus", "earth","mars","jupiter","saturn","uranus","neptune","","", NULL];
$mapped_arr = array_map(function($e){ 
    global $planets;
    if($e == ""){
       return NULL;}
    else{
        return $e;}
    }, $planets);
$filtered_arr = array_filter($mapped_arr, function($e){
    return $e != NULL ? $e : false;
});

function randomArr($i){
    global $filtered_arr;
    $result = array_flip($filtered_arr);
    return array_rand($result, $i);
}
// $arr = array_filter(function($e){
    
// }, $arr)  

print_r(randomArr(2));
print_r(randomArr(3));
print_r(randomArr(2));
print_r(randomArr(4));
print_r(randomArr(5));
*/

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