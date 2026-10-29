<?php
session_start();
require 'koneksi.php';
$username = $_POST['username'] ?? '';
$password = $_POST['password'] ?? '';

$stmt = $pdo->prepare("SELECT * FROM users WHERE username = ?");
$stmt->execute([$username]);
$user = $stmt->fetch(PDO::FETCH_ASSOC);

if($user && password_verify($password, $user['password'])){
    $_SESSION['username'] = $user['username'];
    $_SESSION['level'] = $user['level'];
    $_SESSION['user_id'] = $user['id'];
    header("Location: " . ($user['level'] == 'admin' ? 'admin.php' : 'user.php'));
    exit;
} else {
    header("Location: login.php?pesan=gagal");
    exit;
}
?>
