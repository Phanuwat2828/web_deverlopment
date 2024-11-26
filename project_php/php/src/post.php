
<?php
// กำหนดข้อมูลการเชื่อมต่อ
$host = "db";  // ใช้ชื่อ service ของ MySQL จาก Docker Compose
$username = "MYSQL_USER";  
$password = "MYSQL_PASSWORD";  
$dbname = "project-php";  
// สร้างการเชื่อมต่อ
$conn = new mysqli($host, $username, $password, $dbname);

// ตรวจสอบการเชื่อมต่อ
if ($conn->connect_error) {
    die("การเชื่อมต่อผิดพลาด: " . $conn->connect_error);
}

// ตรวจสอบการส่งข้อมูล
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // รับข้อมูลจากฟอร์ม
    $name = htmlspecialchars($_POST['name'], ENT_QUOTES, 'UTF-8');
    $email = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);
    $phone = htmlspecialchars($_POST['phone'], ENT_QUOTES, 'UTF-8');
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT); 

    // เตรียมคำสั่ง SQL (prepared statement)
    $stmt = $conn->prepare("INSERT INTO customer (user_name, user_email, user_phone, user_password) VALUES (?, ?, ?, ?)");
    
    // ตรวจสอบว่า prepare สำเร็จหรือไม่
    if ($stmt === false) {
        die("เกิดข้อผิดพลาดในการเตรียมคำสั่ง SQL: " . $conn->error);
    }

    // ผูกพารามิเตอร์
    $stmt->bind_param("ssss", $name, $email, $phone, $password);

    // รันคำสั่ง SQL
    if ($stmt->execute()) {
        echo "สมัครสำเร็จ!";
    } else {
        echo "เกิดข้อผิดพลาด: " . $stmt->error;
    }

    $stmt->close();  // ปิด prepared statement
}

// ปิดการเชื่อมต่อ
$conn->close();
?>
