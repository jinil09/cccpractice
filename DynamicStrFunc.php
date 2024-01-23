<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP String Operations</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            background-color: #f4f4f4;
            color: #333;
            margin: 20px;
            padding: 20px;
            border: 1px solid #ccc;
            border-radius: 10px;
        }

        h1 {
            color: #555;
        }

        code {
            background-color: #f9f9f9;
            padding: 2px 5px;
            border: 1px solid #ddd;
            border-radius: 4px;
            font-size:15px;
        }

        .result {
            font-weight: bold;
            color: #007bff;
        }

        .code-block {
            margin-bottom: 20px;
        }
    </style>
</head>
<body>

    <h1>PHP String Operations</h1>

    <?php
    // Original string
    $str = "Hello This is me me!";

    // Display the default string
    echo "<div class='code-block'>Default String is: <code>Hello This is me!</code></div>";

    // Display the length of the string
    echo "<div class='code-block'>Length of the above string is: <span class='result'>" . strlen($str) . "</span></div>";

    // Replace occurrences of "me" with "Php"
    echo "<div class='code-block'>Replace 'me' with 'Php': <code>" . str_replace("me", "Php", $str) . "</code></div>";

    // Find the position of the word 'me'
    echo "<div class='code-block'>Find the position of 'me': <span class='result'>" . strpos($str, "me") . "</span></div>";

    // Extract a substring starting from position 5 with a length of 10
    echo "<div class='code-block'>Substring from position 5: <code>" . substr($str, 5, 10) . "</code></div>";

    // Convert the string to uppercase
    echo "<div class='code-block'>To Upper: <code>" . strtoupper($str) . "</code></div>";

    // Convert the string to lowercase
    echo "<div class='code-block'>To Lowercase: <code>" . strtolower($str) . "</code></div>";

    // Remove white spaces from the start and end of a string
    $str1 = "   Hello Jinil     ";
    echo "<div class='code-block'>Remove white space from start and end: <code>" . trim($str1) . "</code></div>";

    // Join array elements with a separator
    $array = array("Hello", "World", "PHP");
    echo "<div class='code-block'>Join the array: <code>" . implode("//", $array) . "</code></div>";

    // Split a string by a delimiter into an array
    $str2 = "Hello, World, PHP";
    $array1 = explode(",", $str2);
    echo "<div class='code-block'>Split the string into an array: <code>" . implode(", ", $array1) . "</code></div>";

    // Convert special characters to HTML entities
    $str3 = "<scrip+t>alert('Hello, World!');</scrip+t>";
    echo "<div class='code-block'>HTML Special Characters: <code>" . htmlspecialchars($str3) . "</code></div>";

    // Convert all applicable characters to HTML entities
    echo "<div class='code-block'>HTML Entities: <code>" . htmlentities($str3) . "</code></div>";

    // Breaks the string into new lines after each occurrence of a newline character
    $str4 = "Hello\nJinil";
    echo "<div class='code-block'>Newline to HTML break: <code>" . nl2br($str4) . "</code></div>";

    // Repeat the string three times
    echo "<div class='code-block'>String Repeat: <code>" . str_repeat($str, 3) . "</code></div>";

    // Reverse the string
    echo "<div class='code-block'>String Reverse: <code>" . strrev($str) . "</code></div>";

    // Randomly shuffle all characters in a string
    echo "<div class='code-block'>Randomly shuffle characters: <code>" . str_shuffle($str) . "</code></div>";

    // Count words in a string
    echo "<div class='code-block'>Word count in string: <span class='result'>" . str_word_count($str) . "</span></div>";

    // Replace a substring
    echo "<div class='code-block'>Replace substring: <code>" . substr_replace($str, "Php", 7, 5) . "</code></div>";

    // Pad a string to a certain length with another string
    echo "<div class='code-block'>String padding with '*': <code>" . str_pad($str, 30, "*", STR_PAD_BOTH) . "</code></div>";

    // Locale-based string comparison
    $str1 = "   Hello Jinil     ";
    echo "<div class='code-block'>Locale-based string comparison: <span class='result'>" . strcoll($str, $str1) . "</span></div>";

    // Find the length of the initial segment not matching a mask
    $mask = "iou";
    echo "<div class='code-block'>Find length without mask count: <span class='result'>" . strcspn($str, $mask) . "</span></div>";

    // Print the string after the first occurrence of a given character
    echo "<div class='code-block'>Print the string after 'T': <code>" . stristr($str, "T") . "</code></div>";

    // Convert the first character of a string to uppercase
    echo "<div class='code-block'>Convert only first char in string capital: <code>" . ucfirst($str) . "</code></div>";

    // Convert the first character of each word to uppercase
    echo "<div class='code-block'>Convert all first chars in string for given words to capital: <code>" . ucwords($str) . "</code></div>";

    echo "<br><br>";
    ?>
</body>
</html>
