<?php
require 'session.php';

if (isset($_POST['login'])) {
    session_regenerate_id(true);

    $email = htmlspecialchars($_POST['email']);

    $_SESSION['user'] = $email;

    header("Location: dashboard.php");
    exit();
}
?>

<h2>Victim Login (SECURED)</h2>

<form method="POST">
    Email: <input type="email" name="email" required><br><br>
    <button name="login">Login</button>
</form>

<hr>
<p><strong>Current Session ID:</strong> <?= session_id(); ?></p>
