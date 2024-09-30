<?php

$bil1 = [1,2,3,4,5,6,7,8];
$bil2 = [10,9,12,15,4,3,2,1];

$bilangansama = array_intersect($bil1,$bil2);
echo"bilangan yang sama di kedua variable :" . "<br>";
foreach($bilangansama as $a){
    echo $a . " ";
}

echo "<br><br>";

$bilanganbeda = array_diff($bil1,$bil2);
$bilanganbeda2 = array_diff($bil2,$bil1);
echo"bilangan yang berbeda di kedua variable :" . "<br>";
foreach($bilanganbeda2 as $c) {
echo $c . " ";
}
foreach($bilanganbeda as $b){
    echo $b . " ";
}
?>