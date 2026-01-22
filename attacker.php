<?php
session_start();

if (isset($_SESSION['user'])) {
    echo "<h2>🚨 ATTACK SUCCESS</h2>";
    echo "<p>Logged in as: <b>{$_SESSION['user']}</b></p>";
    echo "<p>Session ID: <b>" . session_id() . "</b></p>";
} else {
    echo "<h2>❌ Attacker not logged in</h2>";
}
