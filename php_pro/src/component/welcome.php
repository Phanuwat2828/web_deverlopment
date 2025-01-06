<?php
    $score =  $_POST["mid"]+$_POST["fanal"];
    $grade = '';

    if ($score >= 90) {
        $grade = 'A';
    } elseif ($score >= 80) {
        $grade = 'B';
    } elseif ($score >= 70) {
        $grade = 'C';
    } elseif ($score >= 60) {
        $grade = 'D';
    } else {
        $grade = 'F';
    }
    header("Location: from.php?grade=".$grade);
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
        echo "Hello, ".$_POST['name']."<br>";
        echo "Your score is ".$_POST['mid']." and ".$_POST['fanal']."<br>";
        echo "Your grade is ".$grade;
    ?>
</body>
</html>