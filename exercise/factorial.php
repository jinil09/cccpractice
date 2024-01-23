<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Factorial</title>
    
</head>
<body>
    <h2>Factorial</h2>

    <form action="" method="post">
        <input type="number" placeholder="Enter the number" name="num" required>
        <input type="submit" value="Submit">
    </form>

<?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
       
            $n = $_POST["num"];
           
            $result = factorial($n);

            echo "$n factorial($n!) is: $result";

        } else {
            echo "<p>Please enter a valid number.</p>";
    }

    function factorial($n) {
        if ($n == 0 || $n == 1) {
            return 1;
        } else {
            return $n * factorial($n - 1);
        }
    }

?>


</body>
</html>
