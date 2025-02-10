<?php
    include "class_.php";
    $status = $_POST["status"];
    // $name, $lastname, $id, $birth, $avg_gpa, $fontname, $level
    if($status==="add"){
        $person = new Person($_POST['name'], $_POST['lastname'],$_POST['id'], $_POST['birth'], $_POST['avg_gpa'], $_POST['gender'], $_POST['level']);
        session_start();
        if(!isset($_SESSION["person"])){
            $_SESSION["person"] = array();
        }
        array_push($_SESSION["person"],serialize($person));
        header("Location: index.php");
    }else if($status=== "edit"){
        session_start();
        $index = $_POST['index'];
        $person = new Person($_POST['name'], $_POST['lastname'],$_POST['id'], $_POST['birth'], $_POST['avg_gpa'], $_POST['gender'], $_POST['level']);
        $_SESSION['person'][$index] = serialize($person);
        header("Location: index.php");
    }else if($status === "delete"){
        session_start();
        $index = $_POST['index'];
        unset($_SESSION['person'][$index]);
        $_SESSION['person'] = array_values($_SESSION['person']);
        header("Location: index.php");
    }else{
        echo "Error";
    }
    