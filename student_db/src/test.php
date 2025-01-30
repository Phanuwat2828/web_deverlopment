<?php
$password = 'password123'; // ใช้รหัสผ่านที่รู้จัก
$hashed_password = password_hash($password, PASSWORD_BCRYPT);

// ทดสอบการตรวจสอบ
if (password_verify($password, $hashed_password)) {
    echo "รหัสผ่านถูกต้อง";
} else {
    echo "รหัสผ่านไม่ถูกต้อง";
}


?>