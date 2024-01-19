<?php

//-------------------------------Switch case Example
    $dayofWeek = "Monday";

    switch ($dayofWeek) {
        case 'Monday':
            echo "Hello Its Monday what is Your plan!!<br>";
            break;
        
            case 'Tuesday':
            case 'Wednesday':
            case 'Thursday':        
                echo "Its a week day";
            break;

            case 'Friday':
                echo "Hey Its Friday!";
            break;

            case 'sunday':
                echo "Hey Its Sunday Enjoy!!";
            break;
        default:
            echo "Invalid Day Of Week";
            break;
    }

//---------------------------------Statements

echo "<br><br>";
$condition = false;
//If else
if ($condition) {
    echo "Condition is true.<br>";
} else {
    echo "Condition is false.<br>";
}

//if-elseif-else
$number = 10;

if ($number > 0) {
    echo "Number is positive.<br>";
} elseif ($number < 0) {
    echo "Number is negative.<br>";
} else {
    echo "Number is zero.<br>";
}

//Nested If
$condition1 = true;
$condition2 = false;

if ($condition1) {
    if ($condition2) {
        echo "Both conditions are true.<br>";
    } else {
        echo "Only the first condition is true.<br>";
    }
} else {
    echo "The first condition is false.<br>";
}

echo "<br><br>";

//-------------------------------Loop-Statement

for ($i = 1; $i <= 5; $i++) {
    echo $i . " ";
}
echo "<br>";


$i = 5;
while ($i <= 10) {
    echo $i . " ";
    $i++;
}
echo "<br>";


$colors = array("Red", "Green", "Blue");
foreach ($colors as $color) {
    echo $color . " ";
}
echo "<br>";


?>