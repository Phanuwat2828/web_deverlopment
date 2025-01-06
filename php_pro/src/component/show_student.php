<?php
    session_start();
    $data_student = $_SESSION['Student'];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
        foreach($data_student as $value){
            echo $value . "<br>";
        }
    ?>
</body>
</html>