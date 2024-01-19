
<?php

    echo "<h2><u>Array Functions</u></h2>";
    echo "<br><br>";

    //---------------------------------------------------
    echo "<b>--- Array Creation and Initialization ---</b><br>";
    echo "<br>";

    $cars = array("Volvo","BMW","Audi");
    echo "Creates a new array :";
    foreach ($cars as $x) {
        echo $x."<br>";
    }
    echo "<br>";
    
    $bikes = array("Honda","Splender","Dukati");
    echo "Merge 2 Arrays (Cars, Bikes) :<br>";
    $mergeArray = array_merge($cars,$bikes);
    print_r($mergeArray);
    echo "<br><br>";

    echo "Combine 2 Arrays (Keys, values) :<br>";
    $keys = ['name', 'age', 'city'];
    $values = ['Jinil', 21, 'Ahmedabad'];
    $combineArray = array_combine($keys,$values);
    print_r($combineArray);
    echo "<br><br>";

    echo "Range Of an array :<br>";
    $namerange = range("1","20",2);
    print_r($namerange);
    echo "<br><br>";

    //------------------------------------------------------------------
    echo "<b>--- Array Modification ---</b><br>";
    echo "<br>";

    $originalArray = [1,2,3,4,5];
    echo "This Below is Original Array We perform all Operation On It :<br>";
    echo "<b>";
    print_r($originalArray);
    echo "</b>";
    echo "<br><br>";

    echo "Push element in array :<br>";
    array_push($originalArray, 10);
    //or
    $originalArray[]= 66;
    print_r($originalArray);
    echo "<br><br>";

    echo "Pop Last element in array :<br>";
    array_pop($originalArray);
    print_r($originalArray);
    echo "<br><br>";

    echo "Add element in array from begining :<br>";
    array_unshift($originalArray, 101);
    print_r($originalArray);
    echo "<br><br>";

    echo "Remove element in array from begining :<br>";
    array_shift($originalArray);
    print_r($originalArray);
    echo "<br><br>";

    echo "Removes a portion of the array and replaces it with something else:<br>";
    array_splice($originalArray, 1, 2, [11,86]);
    print_r($originalArray);
    echo "<br><br>";


    //---------------------------------------------------------
    echo "<b>--- Array Access ---</b><br>";
    echo "<br>";

    echo "Counts the number of elements in an array :<br>";
    echo count($originalArray);
    echo "<br><br>";

    echo "Alias of count() :<br>";
    echo sizeof($originalArray);
    echo "<br><br>";

    echo "Checks if the given key or index exists in the array :<br>";
    echo array_key_exists(2,$originalArray);
    echo "<br><br>";

    echo "Returns all the keys or a subset of the keys of an array:<br>";
    print_r(array_keys($originalArray));
    echo "<br><br>";

    echo "Returns all the values of an array:<br>";
    var_dump(array_values($originalArray));
    echo "<br><br>";


    //----------------------------------------------------------------
    echo "<b>--- Array Search ---</b><br>";
    echo "<br>";

    echo "Checks if a value exists in an array :<br>";
    var_dump(in_array(86,$originalArray));
    echo "<br><br>";

    echo " Searches an array for a given value and returns the corresponding key :<br>";
    var_dump(array_search(86,$originalArray));
    echo "<br><br>";

    echo "Returns an array with elements in reverse order :<br>";
    var_dump(array_reverse($originalArray));
    echo "<br><br>";


    //--------------------------------------------------
    echo "<b>--- Array Sorting ---</b><br>";
    echo "<br>";

    echo "Sorts an array :<br>";
    sort($originalArray);
    var_dump($originalArray);
    echo "<br><br>";

    echo "Sorts an array in reverse order :<br>";
    rsort($originalArray);
    var_dump($originalArray);
    echo "<br><br>";

    echo "Sorts an associative array by values :<br>";
    asort($originalArray);
    var_dump($originalArray);
    echo "<br><br>";

    echo "Sorts an associative array by keys :<br>";
    ksort($originalArray);
    var_dump($originalArray);
    echo "<br><br>";

    echo "Sorts an associative array in reverse order by values :<br>";
    arsort($originalArray);
    var_dump($originalArray);
    echo "<br><br>";

    echo "Sorts an associative array in reverse order by keys :<br>";
    krsort($originalArray);
    var_dump($originalArray);
    echo "<br><br>";

     //--------------------------------------------------
     echo "<b>--- Array Filtering ---</b><br>";
     echo "<br>";

     echo "Filters elements of an array using a callback function :<br>";
        $array = [1, 2, 3, 4, 5, 6, 7, 8, 9];
        $filteredArray = array_filter($array, function ($value) {
            return $value % 2 == 0;
        });
    print_r($filteredArray);
    echo "<br><br>";

    echo "Applies a callback function to each element of an array :<br>";
    $squaredArray = array_map(function ($value) {
        return $value * $value;
    }, $array);
    print_r($squaredArray);
    echo "<br><br>";
    
    echo "Iteratively reduces the array to a single value using a callback function :<br>";
    $sum = array_reduce($array, function ($carry, $item) {
        return $carry + $item;
    }, 0);
    echo "Sum is :".$sum;
    echo "<br><br>";

    //--------------------------------------------------
    echo "<b>--- Array Slicing ---</b><br>";
    echo "<br>";

    echo "Extracts a portion of the array :<br>";
    $arrayslice = ['a', 'b', 'c', 'd', 'e'];
    $slicedArray = array_slice($arrayslice, 1, 3);
    print_r($slicedArray);
    echo "<br><br>";


?>