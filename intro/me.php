<?php

// 現在時間
$now = date('Y-m-d H:i:s', time());


// 第一個人
$name = '陳信嘉';
// $title = "我的名字是 $name";
// $title = '我的名字是' . $name;
$birth = 1967;
$age = date('Y', time()) - $birth;  // 計算年齡
$age = 50;
$hobby = '看電影';
$photo = 'images/head1.jpg';


// 第二個人
/*
$name = '阮經天';
$age = 20;
$hobby = 'Star';
$photo = 'images/head2.jpg';
*/

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
    <p>現在是 {$now}</p>
    <hr/>
    <h1>自我介紹</h1>
    <p>姓名：{$name}</p>
    <p>test：{$title}</p>
    <p>年齡：{$age}</p>
    <p>興趣：{$hobby}</p>
    <p><img src="{$photo}"></p>
</body>
</html>
HEREDOC;

echo $html;
?>