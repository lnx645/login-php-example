<?php
session_start();
if(!isset($_SESSION['level']) || $_SESSION['level'] != 'user'){
    header("Location: login.php");
    exit;
}
?>
<h1>Dashboard User</h1>
<p>Halo User: <?= htmlspecialchars($_SESSION['username']) ?></p>
<a href="logout.php">Logout</a>
