<?php
$servername = "localhost";
$username = "root"; // デフォルトは "root"
$password = ""; // XAMPPの場合は空白
$dbname = "test"; // 作成したデータベース名

$conn = new mysqli($servername, $username, $password, $dbname);

// 接続確認
if ($conn->connect_error) {
    die("データベース接続に失敗しました: " . $conn->connect_error);
}
?>
