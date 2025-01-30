<?php 
    session_start();
    if (!isset($_SESSION['user_id'])) {
      header("Location: login.php");
      exit();
    }
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        include "connection_db.php";
        $sql_command = "CALL update_student(?,?,?,?,?,?,?,?,?);";
        $st = $conn->prepare($sql_command);
        $fullN = $_POST['name']. $_POST['lastname'];
        $st->bind_param("isssssids", $_POST['number'], $_POST['id'], $_POST['name'], $_POST['lastname'],$_POST['gender'],$fullN, $_POST['level'], $_POST['avg_gpa'], $_POST["birth"]);
        if ($st->execute()) {
            header("Location: customer.php");
            echo "<script>alert('เพิ่มข้อมูลสำเร็จ');</script>";
       
        } else {
            echo "<script>alert('ไม่สามารถแก้ไขได้');</script>";
            echo "<script>window.history.back();</script>";
        }
        $st->close();
        $conn->close();
    }
?>