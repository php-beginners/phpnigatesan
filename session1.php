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
    <title>SESSION練習1</title>
</head>
<body>
    <h1>甘い物や</h1>
    <form method="post" action="session2.php">
        <input type="text" name="username" value="<?= $_SESSION['username'] ?>" />
        <input type="submit" name="sub" value="お店に入る" />
    </form>
</body>
</html>
