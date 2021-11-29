<?php
session_start();
$_SESSION['prihlasenie']  = false;
header("Location: ../login.php");
?>