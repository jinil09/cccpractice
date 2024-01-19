<?php

    $quote = "In three words I can sum up everything I've learned about life: it goes on.";

    echo "<h3><u>$quote</u></h3>";
    echo "<br>";

    echo "Total number of words in the quote : <b>".str_word_count($quote)."</b>";
    echo "<br><br>";

    echo "To LowerCase : <b>".strtolower($quote)."</b>";
    echo "<br><br>";

    echo "Capitalize the first letter of each word : <b>".ucwords($quote)."</b>";
    echo "<br><br>";
?>