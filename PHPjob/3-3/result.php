<?php

    $num = $_POST['num'];

    $omikuzi = "";

    $num_len = strlen($num)-1;

    $result = substr($num, mt_rand(0, $num_len), 1);

    switch($result){
        case 0:
            $omikuzi = "凶";
            break;

        case $result >= 1 && $result <= 3:
            $omikuzi = "小吉";
            break;
        
        case $result >= 4 && $result <= 6:
            $omikuzi = "中吉";
            break;

        case $result >= 7 && $result <= 8:
            $omikuzi = "吉";
            break;

        case 9:
            $omikuzi = "大吉";
            break;

        default:
            break;

    }

?>

<p><?php echo date("Y/m/d", time()); ?>の運勢は、<br>
選ばれた数字は、<?php echo $result; ?><br>
<?php echo $omikuzi; ?></p>