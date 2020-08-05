<?php
session_start();
unset($_SESSION["user"]);
unset($_SESSION["access"]);
unset($_SESSION["n"]);
header('Location: index.php');
?>
