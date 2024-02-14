<?php
    
    class Calculator{
        public function add($a, $b)
        {
            return $a+$b;
        }
        public function subtract($a, $b) 
        {
            return $a - $b;
        }

        public function multiply($a, $b) {
            return $a * $b;
        }

        public function divide($a, $b) {
            if($b == 0)
            {
                echo "Can not divided by Zero";
            }else{
                return $a/$b;
            }
        }

    }


    // $calculator = new Calculator();
    // echo $calculator->add(10,5);

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $num1 = $_POST["num1"];
        $num2 = $_POST["num2"];
        $operation = $_POST["operation"];
    
        $calculator = new Calculator();
    
        switch ($operation) {
            case "add":
                $result = $calculator->add($num1, $num2);
                break;
            case "subtract":
                $result = $calculator->subtract($num1, $num2);
                break;
            case "multiply":
                $result = $calculator->multiply($num1, $num2);
                break;
            case "divide":
                $result = $calculator->divide($num1, $num2);
                break;
            default:
                $result = "Invalid operation";
        }
    
        echo "Result: " . $result;
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculator</title>
</head>
<body>
    <form method="post">
        <label for="num1">Number 1:</label>
        <input type="number" name="num1" required>

        <label for="operation">Operation:</label>
        <select name="operation" required>
            <option value="add">Add</option>
            <option value="subtract">Subtract</option>
            <option value="multiply">Multiply</option>
            <option value="divide">Divide</option>
        </select>

        <label for="num2">Number 2:</label>
        <input type="number" name="num2" required>

        <button type="submit">Calculate</button>
    </form>
</body>
</html>
