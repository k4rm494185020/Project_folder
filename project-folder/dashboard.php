<?php
session_start();
if (!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] !== true) {
    header("Location: index.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>管理画面</title>
</head>
<body>
    <h2>管理画面</h2>
    <p><a href="manage_news.php">新着情報の管理</a></p>
    <p><a href="manage_contacts.php">お問い合わせ内容の管理</a></p>
    <p><a href="logout.php">ログアウト</a></p>
</body>
</html>
