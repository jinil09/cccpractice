<?php


    $integerVar = 42;
    echo var_dump($integerVar)."<br>";

    $floatVar = 3.14;
    echo var_dump($floatVar)."<br>";

    $stringVar = "Hello, PHP!";
    echo var_dump($stringVar)."<br>";

    $boolVar = true;
    echo var_dump($boolVar)."<br>";

    $arrayVar = array(1, 2, 3, "PHP");
    echo var_dump($arrayVar);
    echo "<br>";

    $nullVar = null;
    echo var_dump($nullVar);

    echo "<br>";echo "<br>";
    //------------------------Type casting--------------------

    //Cast-->String
    $int1  = 5;
    $str1 = "25Jinil";
    $int1 = (string) $int1;
    var_dump($int1); //So now in Output this Int1 show as String
    echo "<br>";
    //Note that when casting a Boolean into string it gets the value "1" (For True boolean Val and In false it can show Empty String), and when casting NULL into string it is converted into an empty string


    //Cast-->int
    $str1 = (int) $str1;
    var_dump($str1);
    echo "<br>";
    //Note that when casting a string that starts with a number, the (int) function uses that number. If it does not start with a number, the (int) function convert strings into the number 0.


    //Cast-->bool
    $strr ="";
    $inttt = -1;
    $strr = (bool) $strr;
    var_dump($strr); echo "<br>";
    $inttt = (bool) $inttt;
    var_dump($inttt); echo "<br>";
    //If a value is 0, NULL, false, or empty, the (bool) converts it into false, otherwise true. Even -1 converts to true.


    //Cast-->Array
    $e = NULL;    // NULL
    $e = (array) $e;
    var_dump($e); echo "<br>";
    //When converting into arrays, most data types converts into an indexed array with one element. NULL values converts to an empty array object


    //Cast-->unset(Null)
    $b = 10;
    //$b = (unset) $b;
    var_dump($b); 

?>
