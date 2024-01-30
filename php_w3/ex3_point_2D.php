<?php
    class Point{
        public $x;
        public $y;

        function __construct($x,$y)
        {
            $this->x=$x;
            $this->y=$y;
        }

        public function calculateDistance($other)//Here we pass second object Point
        {
            return sqrt(pow($this->x - $other->x, 2) + pow($this->y - $other->y, 2));
        }
    }

    $point1 = new Point(1,2);
    $point2 = new Point(4,6);

     echo $point1->calculateDistance($point2);

    
?>