<?php

$str = "Hello This is me!";

echo "Default String is <b>Hello This is me!</b>";
echo "<br><br>";

echo "Length of the Above string is : ".strlen($str);
echo "<br><br>";

echo "We can replace me with Php : ".str_replace("me","php",$str);
echo "<br><br>";

echo "We can find the position of word 'me' : ".strpos($str, "me");
echo "<br><br>";

echo "find the substring of position : ".substr($str, 5, 10); // here 5 indicate starting position and 10 Indicates length
echo "<br><br>";

echo "To Upper : ".strtoupper($str);
echo "<br><br>";

echo "To lowercase : ".strtolower($str);
echo "<br><br>";

$str1 = "   Hello Jinil     ";
echo "Remove white space from start and end : ".trim($str1);
echo "<br><br>";

$array = array("Hello", "World", "PHP");
echo "Join the array : ".implode("//",$array);
echo "<br><br>";

$str2= "Hello, World, PHP";
$array1 = explode(",",$str2);
print_r($array1);
echo "<br><br>";

$str3 = "<script>alert('Hello, World!');</script>";
echo "Html special Character : ".htmlspecialchars($str3);
echo "<br><br>";

echo "Html entities : ".htmlentities($str3);
echo "<br><br>";

$str4 = "Hello\nJinil";
echo nl2br($str4);
echo "<br><br>";

echo "String Repeat : ".str_repeat($str, 3);
echo "<br><br>";

echo "String Reverse : ".strrev($str);
echo "<br><br>";

echo "Randomly shuffles all characters in a string : ".str_shuffle($str);
echo "<br><br>";

echo "Word count in string : ".str_word_count($str);
echo "<br><br>";

echo "Replace substring : ".substr_replace($str, "Php", 7, 5);
echo "<br><br>";

echo "String padding with specific val : ".str_pad($str, 30, "*", STR_PAD_BOTH);
echo "<br><br>";

echo "Locale based string comparison : ".strcoll($str, $str1);
echo "<br><br>";

$mask = "iou";
echo "find length without mask count : ".strcspn($str, $mask);
echo "<br><br>";

echo "Print the str after Given Char :".stristr($str, "T");
echo "<br><br>";

echo "Convert only first Char in string Capital :".ucfirst($str);
echo "<br><br>";

echo "Convert all first Char in string for givem word will Capital : ".ucwords($str);
echo "<br><br>";
?>

ssh-rsa AAAAB3NzaC1yc2EAAAADAQABAAABgQCrj5aWvse9HVNfHwHV2eDI3w5xmQJUQWOMlDQ/KB4Nb41A9dH+5Jr5/wmjzBDT0JAfYBSvOMz7hTyCG539wm+B/MYsEuQo/Vu4txSgGa1DpO6pKywwQ/43FfpQ1OlhGvlm+c2DTP+aqsg0Z3qxCa4C4TBc5pWGa6IrFK91oYB/s8YsHrfVTKQM0V/gpa0BKPzK0k807qi72FaD+cYZUTLj7/WFWgb+kBOApmmbm2Sff0jvgewymiXRJRouHTQ1O98wP18TZbzeHvf3/rFHU7CfqEf0Fn+ovy8cnP8rLYs6qcrG2zJCwktLQtEM7r6rW9yhU2W/07xlFYA3b+bUh254fhtcbMQY6rfHTJ19OI2QHP9IwhQtWTV/juSLHT1/lcU8eiWrnfNXZ+AILOcHaA9Gy/z7Z8iUxxBcEQ6IT9YQaXuYIcOUKi2M47TX6dPiKdBtwwXNUUOZUzgBivl9g5e/wDEdpPtkvZCL+6OulmHmy67kfV93SccWQHg1KK9lyss= jinil