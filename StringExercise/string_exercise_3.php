<?php

    $sentence = "The quick brown fox jumps over the lazy dog";

    echo "<h3><u>$sentence</u></h3>";
    echo "<br>";

    echo "Position of the word 'fox' : <b>".strpos($sentence, "fox")."</b>";
    echo "<br><br>";

    $containsCat = strpos($sentence, "cat") !== false;
    echo "Check if the word 'cat' is present or not : <b>". ($containsCat ? "Yes" : "No") ."</b>";
    echo "<br><br>";

    echo "Print the first 20 characters : <b>".substr($sentence, 0, 20)."</b>";
    echo "<br><br>";
?>