
<?php
    $data = [
        "name" => "Nine",
        "age" => 20,
        "major" => "computerscience"
    ]
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div>
        <?php 
            echo "Hello, ".$data['name']." ".$data['age']."yearold ".$data['major'];

        
        ?>
    </div>
</body>
</html>