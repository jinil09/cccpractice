<?php

try {
    $conn = mysqli_connect("localhost","root","","ccc_practice");
    
} catch (Exeption $e) {
    echo "There is Some Error in this :".$e;
}

?>