<?php
session_start();
if (!isset($_SESSION['loggedin']) || $_SESSION['role'] !== 'user') {
    header('Location: index.php');
    exit;
}
?>

<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>ユーザー画面</title>
</head>
<body>
    <p><a href="user_manage_news.php">新着情報</a></p>
    <p><a href="contact_form.php">お問い合わせ</a></p>
    <a href="logout.php">ログアウト</a>
</body>
</html>
