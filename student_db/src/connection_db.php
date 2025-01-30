<?php
$servername = "db";  
$username = "test_user";         
$password = "test1234";            
$dbname = "student_db";  

$conn = new mysqli($servername, $username, $password, $dbname);


if ($conn->connect_error) {
    echo "<script>alert(`Can't connect with server plss try again!`);</script>";
    die("Connection failed: " . $conn->connect_error);
}

?>
