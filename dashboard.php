<?php
require 'session.php';

if (!isset($_SESSION['user'])) {
    header("Location: login.php");
    exit();
}
?>

<h2>Dashboard</h2>

<p>
    Welcome:
    <b><?= htmlspecialchars($_SESSION['user']); ?></b>
</p>

<p><strong>Session ID:</strong> <?= session_id(); ?></p>

<a href="logout.php">Logout</a>
