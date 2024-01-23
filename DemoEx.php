<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>String Function</title>

    <style>
        body {
    font-family: 'Arial', sans-serif;
    background-color: #f0f0f0;
    margin: 0;
    display: flex;
    align-items: center;
    justify-content: center;
    height: auto;
    gap:20px;
    padding: 2rem;
    flex-flow: wrap;
}

form {
    width:350px;
    background-color: #fff;
    padding: 20px;
    border-radius: 8px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
}

label {
    display: block;
    margin-bottom: 8px;
    color: #333;
}

input {
    width: 100%;
    padding: 8px;
    margin-bottom: 16px;
    box-sizing: border-box;
    border: 1px solid #ccc;
    border-radius: 4px;
}

button {
    background-color: #4caf50;
    color: #fff;
    padding: 10px 15px;
    border: none;
    border-radius: 4px;
    cursor: pointer;
}

button:hover {
    background-color: #45a049;
}

.rspan{
    color:red;
}

    </style>
</head>
<body>
    
<form method="post">
    <input type="hidden" name="formId" value="String_Length">
    <label for="strlength1">String Length</label>
    <input type="text" name="strlength" placeholder="Enter String">
    <button type="submit">Submit</button>
    <div class="original-str" id="String_Length-originalstr"></div>
    <div class="result-block" id="String_Length-result"></div>
</form>

<form method="post">
    <input type="hidden" name="formId" value="String_Replace">
    <label for="strlength1">String Replace</label>
    <input type="text" name="strlength" placeholder="Enter String">
    <input type="text" name="search" placeholder="Search Element">
    <input type="text" name="Replace" placeholder="Replace element">
    <button type="submit">Submit</button>

    <div class="original-str" id="String_Replace-originalstr"></div>
    <div class="result-block" id="String_Replace-result"></div>
</form>

<form method="post">
    <input type="hidden" name="formId" value="String_Position">
    <label for="strlength1">String Position</label>
    <input type="text" name="strlength" placeholder="Enter String">
    <input type="text" name="needle" placeholder="Search Element">
    <button type="submit">Submit</button>

    <div class="original-str" id="String_Position-originalstr"></div>
    <div class="result-block" id="String_Position-result"></div>
</form>

<?php
    // Define your functions
    function strlength($str) {
        return strlen($str);
    }

    function str_rep($str, $search, $replace){
        return str_replace($search, $replace, $str);
    }

    function str_pos($str, $search){
        return strpos($str, $search);
    }

    

    // Check if form is submitted
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Get the form identifier
        $formId = $_POST["formId"];

        
        $str = $_POST["strlength"];

        if ($formId == "String_Length") {
            $result = strlength($str);
        } elseif ($formId = "String_Replace") {
            $search = $_POST["search"];
            $replace =$_POST["Replace"];
            $result = str_rep($str, $search, $replace);
        }elseif ($formId = "String_Position") {
            $search = $_POST["needle"];
            $result = str_pos($str, $search);
        }


        //Display the Original String
        echo "<script>document.getElementById('$formId-originalstr').innerHTML = '<h3>$str  <i>(Original String)<i></h3>';</script>";
        // Display the result
        echo "<script>document.getElementById('$formId-result').innerHTML = '<h3>$result  <i>(Result)<i></h3>';</script>";
    }
?>
</body>
</html>

