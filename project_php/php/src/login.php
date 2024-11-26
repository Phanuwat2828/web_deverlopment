<!DOCTYPE html>
<html lang="en">
<head>
    <title>เพิ่มข้อมูลผู้ใช้</title>
</head>
<body>
    <form method="POST" action="post.php">
        <label for="name">ชื่อ:</label>
        <input type="text" id="name" name="name" required><br>
        
        <label for="email">อีเมล:</label>
        <input type="email" id="email" name="email" required><br>
        
        <label for="phone">เบอร์โทร:</label>
        <input type="text" id="phone" name="phone"><br>

        <label for="password">รหัส:</label>
        <input type="password" id="password" name="password"><br>
        
        <button type="submit">สมัคร</button>
    </form>
</body>
</html>



