<?php
// 定義參數
$MIN_A = 1;
$MAX_A = 9;
$MIN_B = 1;
$MAX_B = 9;

// 隨機產生數字
// $a = mt_rand(1, 9);
// $b = mt_rand(1, 9);
$a = mt_rand($MIN_A, $MAX_A);
$b = mt_rand($MIN_B, $MAX_B);

$pic_a = 'images/' . $a . '.jpg';
$pic_b = 'images/' . $b . '.jpg';


$html = <<< HEREDOC
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <p><img src="{$pic_a}"><img src="images/mul.jpg"><img src="{$pic_b}"></p>

    <p>| <a href="?">換一題</a> | <a href="answer.php?a={$a}&b={$b}">看答案</a> | </p>
</body>
</html>
HEREDOC;

echo $html;
?>