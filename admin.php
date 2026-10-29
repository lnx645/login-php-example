<?php
session_start();
if(!isset($_SESSION['level']) || $_SESSION['level'] != 'admin'){
    header("Location: login.php");
    exit;
}
?>
<h1>Dashboard Admin</h1>
<p>Halo Admin: <?= htmlspecialchars($_SESSION['username']) ?></p>
<a href="logout.php">Logout</a>
