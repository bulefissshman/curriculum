<?php
//POST送信で送られてきた名前を受け取って変数を作成
$name = $_POST['name'];

//①画像を参考に問題文の選択肢の配列を作成してください。
$question1 = array('aw1' => 80, 'aw2' => 22, 'aw3' => 20, 'aw4' => 21);
$question2 = array('aw1' => "PHP", 'aw2' => "Python", 'aw3' => "JAVA", 'aw4' => "HTML");
$question3 = array('aw1' => "join", 'aw2' => "select", 'aw3' => "insert", 'aw4' => "update");

//② ①で作成した、配列から正解の選択肢の変数を作成してください
$q1ok = 22;
$q2ok = "HTML";
$q3ok = "select";

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
    <p>お疲れ様です<?php echo $name ?>さん</p>
    
    <!--フォームの作成 通信はPOST通信で-->
    <form action="answer.php" method="post">
    
    <h2>①ネットワークのポート番号は何番？</h2>
    <!--③ 問題のradioボタンを「foreach」を使って作成する-->
    <?php
        foreach($question1 as $key => $value){
            $radiobotton = '<input type="radio" name="question1" value="'.$value.'">';
            echo $radiobotton.$value;
        }
    ?>
    
    <h2>②Webページを作成するための言語は？</h2>
    <!--③ 問題のradioボタンを「foreach」を使って作成する-->
    <?php
        foreach($question2 as $key => $value){
            $radiobotton = '<input type="radio" name="question2" value="'.$value.'">';
            echo $radiobotton.$value;
        }
    ?>

    <h2>③MySQLで情報を取得するためのコマンドは？</h2>
    <!--③ 問題のradioボタンを「foreach」を使って作成する-->
    <?php
        foreach($question3 as $key => $value){
            $radiobotton = '<input type="radio" name="question3" value="'.$value.'">';
            echo $radiobotton.$value;
        }
    ?>

    <!--問題の正解の変数と名前の変数を[answer.php]に送る-->
    <input type="hidden" name="name" value="<?php echo $name; ?>">
    <input type="hidden" name="q1" value="<?php echo $q1ok; ?>">
    <input type="hidden" name="q2" value="<?php echo $q2ok; ?>">
    <input type="hidden" name="q3" value="<?php echo $q3ok; ?>">

        <br>
        <input type="submit" value="回答する" />
    </form>
</body>
</html>