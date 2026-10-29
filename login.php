<?php session_start(); if(isset($_SESSION['level'])){ header("Location: ".($_SESSION['level']=='admin'?'admin.php':'user.php')); exit; } ?>
<!DOCTYPE html>
<html>
<head><title>Login Multi Level</title></head>
<body>
<h2>Login Multi Level</h2>
<?php if(isset($_GET['pesan'])) echo "<p style='color:red'>Username / Password salah!</p>"; ?>
<form action="cek_login.php" method="POST">
    <input type="text" name="username" placeholder="Username" required><br><br>
    <input type="password" name="password" placeholder="Password" required><br><br>
    <button type="submit">LOGIN</button>
</form>
<p>Akun contoh: admin / password & user / password</p>
</body>
</html>
