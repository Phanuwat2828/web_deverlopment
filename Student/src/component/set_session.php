<?php
    class Person{
        private $name;
        private $lastname;
        private $id;
        private $birth;
        private $avg_gpa;
        private $fontname;
        private $level;
        public function __construct($name, $lastname, $id, $birth, $avg_gpa, $fontname, $level) {
            $this->name = $name;
            $this->lastname = $lastname;
            $this->id = $id;
            $this->birth = $birth;
            $this->avg_gpa = $avg_gpa;
            $this->fontname = $fontname;
            $this->level = $level;
        }
        public function getName() {
            return $this->name;
        }

        public function setName($name) {
            $this->name = $name;
        }

        public function getLastname() {
            return $this->lastname;
        }

        public function setLastname($lastname) {
            $this->lastname = $lastname;
        }

        public function getId() {
            return $this->id;
        }

        public function setId($id) {
            $this->id = $id;
        }

        public function getBirth() {
            return $this->birth;
        }
        public function setBirth($birth) {
            $this->birth = $birth;
        }

        public function getAvgGpa() {
            return $this->avg_gpa;
        }

        public function setAvgGpa($avg_gpa) {
            $this->avg_gpa = $avg_gpa;
        }

        public function getFontname() {
            return $this->fontname;
        }

        public function setFontname($fontname) {
            $this->fontname = $fontname;
        }

        public function getLevel() {
            return $this->level;
        }

        public function setLevel($level) {
            $this->level = $level;
        }

    }
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
    