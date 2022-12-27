<?php
$fruits = array("りんご" => 150, "みかん" => 75, "桃" => 1500);

function keisan($tanka, $num){
    return $tanka*$num;
}

foreach($fruits as $key => $value){
    $sum = keisan($value, 2);
    print $key."は、".$sum."円です";
    echo '<br>';
}
?>