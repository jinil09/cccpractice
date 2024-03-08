<?php
function sortArray($arr) {
    $n = count($arr);

    for ($i = 1; $i < $n; $i++) {
        $key = $arr[$i];
        $j = $i - 1;

        while ($j >= 0 && $arr[$j] > $key) {
            $arr[$j + 1] = $arr[$j];
            $j = $j - 1;
        }

        $arr[$j + 1] = $key;
    }

    return $arr;
}

$inputArray = [-10, -20, 8, 1, -3];
$sortedArray = sortArray($inputArray);

echo "Original Array: " . implode(", ", $inputArray) . "<br>";
echo "Sorted Array: " . implode(", ", $sortedArray) . "<br>";

