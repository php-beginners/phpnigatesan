<?php
//  エラーを全て表示する
error_reporting(E_ALL);
//  サーバーに保存されているセッション変数をリストアする
session_start();
?>
<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SESSION練習3</title>
</head>
<body>
    <h1>甘い物や</h1>
    <p>ありがとうございます。<?= $_SESSION['username'] ?>様</p>
    <p>合計金額は、<?= number_format($_POST['kasutera'] * 400) ?>円です</p>
    <div>
        <a href="session1.php">戻る</a>
    </div>
</body>
</html>
