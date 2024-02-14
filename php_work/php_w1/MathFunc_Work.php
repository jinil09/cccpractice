<?php

//-------------------------Basic Arithmetic

$num = -8.54;

echo "Absolute Value : ".abs($num)."<br>";
echo "Ceil Value : ".ceil($num)."<br>";
echo "floor Value : ".floor($num)."<br>";
echo "RoundOff Value : ".round($num, 1)."<br>";


//-------------------------Power Function

$exponent = 2;
$base =16;

echo "Base: $base, Exponent: $exponent<br>";
echo "Power: " . pow($base, $exponent) . "<br>";
echo "Square Root: " . sqrt($base) . "<br>";

//-------------------------Rendom Number Genaration

echo "This Number Generate rendomly in rang between 1000 to 9999 : ".rand(1000, 9999)."<br>";

//-------------------------Number Formation

$largeNumber = 1234567.89;
$decimals = 2;
$decimal_point = '.';
$thousands_separator = ',';
echo "Original Number: $largeNumber<br>";
echo "Formatted Number: " . number_format($largeNumber, $decimals, $decimal_point, $thousands_separator) . "<br>";

echo typeof($largeNumber);
?>