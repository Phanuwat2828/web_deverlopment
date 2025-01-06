<?php
    class Studen{
        public $name;
        public $id;
        public $GPA;
        public function set_all($name,$id,$GPA){
            $this->name = $name;
            $this->id = $id;
            $this->GPA = $GPA;
        }
    }
    $ob = new Studen();
    $ob->set_all($_POST['name'],$_POST['mid'],$_POST['fanal']);
    session_start();
    if (!isset($_SESSION["Student"])) {
        $_SESSION["Student"] = array();
    }
    array_push( $_SESSION["Student"],$ob);
    header("Location: show_student.php");
?>