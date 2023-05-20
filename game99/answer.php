<?php

// $a = $_GET['a'];
// $b = $_GET['b'];
$a = isset($_GET['a']) ? $_GET['a'] : 0;
$b = isset($_GET['b']) ? $_GET['b'] : 0;

$ans = $a * $b;

// 圖片
$n1 = $ans % 10;       // 個位數
$n2 = floor($ans / 10); // 十位數

// 判斷十位數
if($n2==0) {
    $n1_pic = '<img src="images/' . $n1 . '.jpg">';
    $n2_pic = '';
}
else {
    $n1_pic = '<img src="images/' . $n1 . '.jpg">';
    $n2_pic = '<img src="images/' . $n2 . '.jpg">';
}


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
    <p>{$a} x {$b} 的答案是 {$ans}</p>
    
    <p>{$n2_pic}{$n1_pic}</p>

    <p><a href="question.php">下一題</a> </p>
</body>
</html>
HEREDOC;

echo $html;
?>