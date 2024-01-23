<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Number is Prime Or Not</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            text-align: center;
            margin: 20px;
        }

        h2 {
            color: #333;
        }

        form {
            margin-top: 20px;
        }

        input[type="number"] {
            padding: 10px;
            font-size: 16px;
        }

        input[type="submit"] {
            padding: 10px 20px;
            font-size: 16px;
            background-color: #4caf50;
            color: #fff;
            border: none;
            cursor: pointer;
        }

        input[type="submit"]:hover {
            background-color: #45a049;
        }

        p {
            margin-top: 20px;
            padding: 10px;
            font-size: 18px;
            font-weight: bold;
            color: #333;
        }
    </style>
</head>
<body>
    <h2>Prime Number Checker</h2>

    <form action="" method="post">
        <input type="number" placeholder="Enter the number" name="num">
        <input type="submit" value="Submit">
    </form>

<?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
       
            $n = $_POST["num"];
            $count = 0;
            
            if($n<2)
            {
                echo "<p>$n is Not a Prime Number.</p>";// 1 and 0 are not prime numbers
            }else{

                for ($i=2;$i<=$n/2;$i++) {
                    if ($n % $i==0) {
                        $count++;
                    }
                }
    
                echo "<p>";
                if ($count >= 1) {
                    echo "$n is Not Prime Number.";
                } else {
                    echo "$n is Prime Number.";
                }
                echo "</p>";
            }
        } else {
            echo "<p>Please enter a valid number.</p>";

    }
    
?>

<!-- We also Use some function to make this -->

<!-- if ($_SERVER["REQUEST_METHOD"] == "POST") {
       
    $n = $_POST["num"];
    if (isPrime($n)) {
        echo "$n is a prime number.";
    } else {
        echo "$n is Not a prime number.";
    }
}
    function isPrime($num)
    {
        if($num < 2)
        {
            return false; 
        }else{
            for ($i = 2; $i <= sqrt($num); $i++) {
                if ($num % $i == 0) {
                    return false;
                }
            }
            return true;
        }
    } -->

</body>
</html>
