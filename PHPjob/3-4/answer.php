<?php 
//[question.php]から送られてきた名前の変数、選択した回答、問題の答えの変数を作成
$name = $_POST['name'];

$q1 = $_POST['question1'];
$q2 = $_POST['question2'];
$q3 = $_POST['question3'];

$q1ok = $_POST['q1'];
$q2ok = $_POST['q2'];
$q3ok = $_POST['q3'];

//選択した回答と正解が一致していれば「正解！」、一致していなければ「残念・・・」と出力される処理を組んだ関数を作成する

function chk($aw1, $aw2){
    if($aw1 == $aw2){
        echo "正解！";
    }else{
        echo "残念・・・";
    }
}

?>

<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
  <title></title>
  <link rel="stylesheet" href="stylesheet.css">
</head>

<body>
    <p><?php echo $name ?>さんの結果は・・・？</p>
    
    <p>①の答え</p>
    <!--作成した関数を呼び出して結果を表示-->
    <?php chk($q1, $q1ok); ?>
    
    <p>②の答え</p>
    <!--作成した関数を呼び出して結果を表示-->
    <?php chk($q2, $q2ok); ?>

    <p>③の答え</p>
    <!--作成した関数を呼び出して結果を表示-->
    <?php chk($q3, $q3ok); ?>
</body>
</html>