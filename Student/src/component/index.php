<?php
    session_start();
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
    if (isset($_SESSION["person"])) {
        $person = $_SESSION["person"];
    } else {
        $person = [];
    }

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Kanit:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap');
        body{
            margin: 0px;
            padding: 0px;
            font-family: "Kanit", serif;
            font-weight: 300;
            font-style: normal;
            
        }
        .box1 h5 {
            font-weight: 300;
           
        }
        .box1 h5 {
            font-weight: 300;
            
        }
        .box h5 {
            font-weight: 200;
        }
        .box h5 { 
            font-weight: 200;
           
        }
        .box{
            width: 33%;
        }
        .box1{
        
            width: 33%;
        }
    </style>
</head>
<body>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
    <nav class="navbar bg-body-tertiary sticky-top">
        <div class="container-fluid">
        <a class="navbar-brand">Dog Compony</a>
        <div style="display: flex; flex-direction: row;" class="nav-item"> 
            
        </div>
        </div>
    </nav>
    <div class="container_ " style="display: flex; flex-direction:column; width:100%; height: 100%; align-items: center;">
        
        <div class="headd" style="background-color: #F5004F; width: 80%; height:100px; padding-left:20px; padding-top:10px; Display: flex; flex-direction:column;">
            <h2 style="  color: white; margin:0px;">Customer</h2>
            <p><a href="from.php" style=" color: white;">Add Customer+</a></p> 
        </div>
        <div class="content" style=" width: 80%; height:700px; padding:10px; display: flex; flex-direction:column; ">
            <div class="hade_" style="display: flex; flex-direction:row; justify-content: space-between; width: 100%; padding-left: 10px; padding-right: 10px;">
                <div class="font_"style='display: flex; flex-direction:row; align-items: center; height: 50px; justify-content: space-between; width: 32%; ' >
                    <div class='box1'><h5>ID</h5></div>
                    <div class='box1'> <h5>Name</h5></div>
                    <div class='box1'> <h5>LastName</h5></div>
                </div>
                <div class="last"style='display: flex; flex-direction:row; align-items: center;align-items: center; height: 50px;  justify-content: space-between; width: 52%; '>
                    <div class='box1'><h5>Birth Day</h5></div>
                    <div class='box1'><h5>GPA</h5></div>
                    <div class='box1'> <h5>Level</h5></div>
                    <div class='box1'><h5>edit</h5></div>
                    <div class='box1'> <h5>delete</h5></div>
                </div>
               
            </div>
            <div style="display: flex; flex-direction:column; width: 100%; height: auto; padding-left: 10px; padding-right: 10px;">
                <?php
                    $i=0;
                    function add_element($per,$i){
                        return "
                            <div class='hade_' style='display: flex; flex-direction:row; justify-content: space-between; width: 100%; '>
                                <div class='font_1' style='display: flex; flex-direction:row; justify-content: space-between; width: 32%; align-items: center; height: 50px;'>
                                    <div class='box'>  <h5>{$per->getId()}</h5></div>
                                    <div class='box'> <h5>{$per->getName()}</h5></div>
                                    <div class='box'> <h5>{$per->getLastname()}</h5></div>
                                </div>
                                <div class='last1' style='display: flex; flex-direction:row; align-items: center;align-items: center; height: 50px;  justify-content: space-between; width: 52%; '>
                                    <div class='box'><h5>{$per->getBirth()}</h5></div>
                                    <div class='box'>  <h5>{$per->getAvgGpa()}</h5></div>
                                    <div class='box'> <h5>{$per->getLevel()}</h5></div>
                                   
                                    <div class='box'> <form action='edit.php' method='GET'><button class='btn btn-primary' name='index' value='{$i}'>Edit Data</button> </form></div>
                                    <div class='box'><a href='delete.php?id={$i}' style='margin-right: 10px;'><button class='btn btn-danger'>Delete</button></a></div>
                                </div>
                            </div>
                        ";
                    }

                    foreach($person as $value){
                        $per = unserialize($value);
                        echo add_element($per,$i);
                        $i+=1;
                    }
                ?>
          
                
            </div>
          

        </div>
    </div>
</body>
</html>