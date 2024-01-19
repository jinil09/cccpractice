<?php

//---------------------Arithmetic Operators
$a = 10;
$b = 3;
echo "<b>--- Arithmetic Operators ---</b><br>";
echo "Addition: " . ($a + $b) . "<br>";
echo "Subtraction: " . ($a - $b) . "<br>";
echo "Multiplication: " . ($a * $b) . "<br>";
echo "Division: " . ($a / $b) . "<br>";
echo "Modulus: " . ($a % $b) . "<br>";
echo "Exponentiation: " . ($a ** $b) . "<br>";

//---------------------Assignment Operators
$c = 5;
echo "<br><b>--- Assignment Operators ---</b><br>";
echo "Original Value: $c<br>";
$c += $a; // c = c+a
echo "Addition Assignment: $c<br>";
$c -= $a;
echo "Subtraction Assignment: $c<br>";
$c *= $a;
echo "Multiplication Assignment: $c<br>";
$c /= $a;
echo "Division Assignment: $c<br>";
$c %= $a;
echo "Modulus Assignment: $c<br>";

//---------------------Comparison Operators
echo "<br><b>--- Comparison Operators ---</b><br>";
var_dump($a == $b);
var_dump($a === $b);
var_dump($a != $b);
var_dump($a !== $b);
var_dump($a > $b);
var_dump($a < $b);
var_dump($a >= $b);
var_dump($a <= $b);
echo "<br>";

//---------------------Logical Operators
$e = true;
$f = false;
echo "<br><b>--- Logical Operators ---</b><br>";
var_dump($e && $f);
var_dump($e || $f);
var_dump(!$e);
echo "<br>";


//---------------------Increment and Decrement Operators
$g = 2;
echo "<br><b>--- Increment and Decrement Operators ---</b><br>";
echo "Original Value: $g<br>";
echo "Increment (pre): " . ++$g . "<br>";
echo "Increment (post): " . $g++ . "<br>";
echo "Value after Increment: $g<br>";
echo "Decrement (pre): " . --$g . "<br>";
echo "Decrement (post): " . $g-- . "<br>";
echo "Value after Decrement: $g<br>";

//---------------------String Operators
$h = "Hello, ";
$i = "PHP!";
echo "<br><b>--- String Operators ---</b><br>";
echo "Concatenation: " . $h . $i . "<br>";
$h .= $i;
echo "Concatenation Assignment: " . $h . "<br>";

//---------------------Array Operators
$j = array(1, 2, 3);
$k = array(3, 4, 5);
echo "<br><b>--- Array Operators ---</b><br>";
var_dump($j + $k);
var_dump($j == $k);
var_dump($j === $k);
var_dump($j != $k);
var_dump($j !== $k);
echo "<br>";

//---------------------Conditional (Ternary) Operator
$l = 8;
$m = ($l % 2 == 0) ? "Even" : "Odd";
echo "<br><b>--- Conditional (Ternary) Operator ---</b><br>";
echo "$l is $m<br>";

//---------------------Null Coalescing Operator
$n = null;
$o = $n ?? "Default Value Jinil";
echo "<br><b>--- Null Coalescing Operator ---</b><br>";
echo "Value of \$o: $o<br>";

//---------------------Type Operators
$p = "Hello, PHP!";
$q = 123;
echo "<br><b>--- Type Operators ---</b><br>";
echo "Type of \$p: " . gettype($p) . "<br>";
echo "Type of \$q: " . gettype($q) . "<br>";

?>
