<?php
$host = "localhost";
$username = "MYSQL_USER";
$password = "MYSQL_PASSWORD";
$dbname = "project-php";
$conn = new mysqli($host, $username, $password, $dbname);
if ($conn->connect_error) {
    die("การเชื่อมต่อล้มเหลว: " . $conn->connect_error);
}
?>
