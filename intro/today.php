<?php

$today = date('Y-m-d', time());
$nextday = date('Y-m-d', time()+86400*14);



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
    <h1>我的第一個網頁</h1>
    <p>今天是 {$today}</p>
    <p>到期日：{$nextday}</p>
</body>
</html>
HEREDOC;

echo $html;
?>