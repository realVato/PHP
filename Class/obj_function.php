<?php

    class Student {
        public $name;
        public $major;
        public $gpa;

        function __construct($name, $major, $gpa)
        {
            echo $this->name = "$name <br>";
            echo $this->major = "$major <br>";
            echo $this->gpa = "$gpa <br><br>";
        }

        function hasHonours() {
            if ($this->gpa >= 85) {
                return "true <br>";
            }
            return "false <br>";
        }
    }

    $student1 = new Student("Sekiro", "Wolf School", 100);
    $student2 = new Student("Genichiro", "Ashina clan", 70);
    
    echo $student1->hasHonours();
    echo $student2->hasHonours();

?>