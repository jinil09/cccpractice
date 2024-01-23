<?php

    $name = "John";

    echo "<h3><u>$name</u></h3>";
    echo "<br>";

    echo "Pad the string with underscores (`_`) : <b>".str_pad($name, 10, "_",STR_PAD_LEFT)."</b>";
    echo "<br><br>";

    echo "Pad the string with asterisks (`*`) : <b>".str_pad($name, 8, "*",STR_PAD_RIGHT)."</b>";
    echo "<br><br>";
?>