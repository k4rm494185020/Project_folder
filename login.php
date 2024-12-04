<?php
session_start();

// ログイン処理
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];

    // ユーザ名とパスワードの確認
    if ($username === 'admin' && $password === '1234') {
        // セッションにログイン状態を保存
        $_SESSION['loggedin'] = true;
        header('Location: admin_dashboard.php'); // 管理画面にリダイレクト
        exit;
    } else {
        $error = 'ユーザ名またはパスワードが間違っています。';
    }
}
?>

<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ログイン</title>
</head>
<body>
    <h1>ログイン</h1>
    <?php if (!empty($error)): ?>
        <p style="color: red;"><?php echo htmlspecialchars($error); ?></p>
    <?php endif; ?>
    <form
