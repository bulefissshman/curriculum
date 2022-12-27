<?php
    $num = 1;

for($i = 1; $i<=100; $i++){
    if($num % 3 == 0 && $num % 5 == 0 ){
        echo "FizzBuzz!!";
        echo '<br>';
    }elseif($num % 3 == 0){
        echo "Fizz!";
        echo '<br>';   
    }elseif($num % 5 == 0){
        echo "Buzz!!";
        echo '<br>';
    }else{
        echo $num;
        echo '<br>';
    }
    $num++;
}

?>