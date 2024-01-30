<?php

    class Employee{
        public $name;
        public $position;
        public $salary;

        public function calculateYearlyBonus() {
            return $this->salary * 0.1; //with 10% bonus
        }
    }

    $employee = new Employee();
    $employee->name = "Jinil";
    $employee->position = "PHP Dev.";
    $employee->salary = 360000;
    


    echo $employee->calculateYearlyBonus(); // Output: 5000

?>