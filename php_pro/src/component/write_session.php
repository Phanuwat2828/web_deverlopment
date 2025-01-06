<?php
    session_start();
    $_SESSION['name'] = "Nine";
    header("Location: read_sesstion.php");
?>