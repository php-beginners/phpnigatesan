<?php
//  エラーを全て表示する
error_reporting(E_ALL);
//  サーバーに保存されているセッション変数をリストアする
session_start();
//  名前を入力していない場合に対応
$username = $_POST['username'] ? $_POST['username'] : '名無しさん';
//  文字列をエスケープしないとハッキングされます
$username = htmlentities($_POST['username'], ENT_QUOTES | ENT_HTML5, 'UTF-8');
//  セッションに保存する
$_SESSION['username'] = $username;
?>
<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SESSION練習2</title>
</head>
<body>
    <h1>甘い物や</h1>
    <p>いらっしゃいませ。<?= $_SESSION['username'] ?>様</p>
    <form method="post" action="session3.php">
        台湾カステラ 400円
        <select name="kasutera">
            <option value="0" selected>何本?</option>
            <option value="1">1本</option>
            <option value="2">2本</option>
            <option value="3">3本</option>
            <option value="4">4本</option>
        </select><br>
        <input type="submit" name="sub" value="買う">
    </form>
</body>
</html>
