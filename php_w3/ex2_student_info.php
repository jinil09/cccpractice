<?php

    class Student{
        public $name;
        public $age;
        public $grade;


        function __construct($name,$age,$grade)
        {
            $this->name=$name;
            $this->age=$age;
            $this->grade=$grade;
        }

        public function displayInfo(){
            echo "[Name: $this->name, Age: $this->age, Grade: $this->grade]";
        }
    }

    $student = new Student("Jinil","21","AA");
    // $student->name = "Jinil";
    // $student->age = 21;
    // $student->grade = "AA";
    $student->displayInfo();
?>