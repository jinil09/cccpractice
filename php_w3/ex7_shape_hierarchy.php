<?php

class Shape {
    public $radius;
    public $length;
    public $width;
    
}

class Circle extends Shape {

    public function __construct($radius) {
        $this->radius = $radius;
    }

    public function calculateArea() {
        return pi() * pow($this->radius, 2);
    }

    public function calculatePerimeter() {
        return 2 * pi() * $this->radius;
    }
}

class Rectangle extends Shape {
    

    public function __construct($length, $width) {
        $this->length = $length;
        $this->width = $width;
    }

    public function calculateArea() {
        return $this->length * $this->width;
    }

    public function calculatePerimeter() {
        return 2 * ($this->length + $this->width);
    }
}


$circle = new Circle(5);

$rectangle = new Rectangle(4, 6);

echo "Circle Area: " . $circle->calculateArea() . "<br>";
echo "Circle Perimeter: " . $circle->calculatePerimeter() . "<br>";

echo "Rectangle Area: " . $rectangle->calculateArea() . "<br>";
echo "Rectangle Perimeter: " . $rectangle->calculatePerimeter();
    