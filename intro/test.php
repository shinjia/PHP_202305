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
    <h2>Hello</h2>
    <p>今天是 <?php echo date('Y-m-d', time()); ?></p>
    <p>一週後 <?php echo date('Y-m-d', time()+86400*7); ?></p>
</body>
</html>