<?php

$num = mt_rand(0,9);
// $photo = 'images/3.jpg';
// $photo = "images/$num.jpg";
$photo = 'images/' . $num . '.jpg';

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
    <h1>我的幸運數字</h1>
    <p>num = {$num}</p>
    <p><img src="{$photo}"></p>
    <p><a href="index.php">再產生一次</a></p>
</body>
</html>
HEREDOC;

echo $html;
?>