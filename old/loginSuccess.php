<?php
session_start();
if (isset($_SESSION['username'])) {
    echo 'Welcome, '.$_SESSION["username"];
}
?>
<br>
<a href="login.php">sign out</a>
<a href="./menu.php">Menu</a>