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
