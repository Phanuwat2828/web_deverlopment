<?php
    session_start();
    if (!isset($_SESSION['user_id'])) {
      header("Location: login.php");
      exit();
    }
    $number = $_POST["number"];
    include "connection_db.php";
    $sql_command = "CALL delete_student(?);";
    $st = $conn->prepare($sql_command);
    $st->bind_param("i", $number);
    if ($st->execute()) {
        header("Location: customer.php");
        echo "<script>alert('ลบเรียบร้อย');</script>";
        
    } else {
        echo "<script>alert('ไม่มีข้อมูล');</script>";
        echo "<script>window.history.back();</script>";
    }

?>