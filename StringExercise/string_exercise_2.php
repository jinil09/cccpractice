<?php


    $text = "Hello, World! How are you doing?";
    echo "<h3><u>$text</u></h3>";
    echo "<br>";

    echo "Length of given String : <b>".strlen($text)."</b>";
    echo "<br><br>";

    echo "To UpperCase : <b>".strtoupper($text)."</b>";
    echo "<br><br>";

    echo "To LowerCase : <b>".strtolower($text)."</b>";
    echo "<br><br>";

    echo "Replace : <b>".str_replace("How are you doing?",  "Fine, thank you!", $text)."</b>";
    echo "<br><br>";

    echo "Print the first 10 characters : <b>".substr($text, 0, 10)."</b>";
    echo "<br><br>";

    echo "Substring starting from the 8th character to the end : <b>".substr($text, 7)."</b>";
    echo "<br><br>";


?>