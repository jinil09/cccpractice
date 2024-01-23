<?php

    $arr= array(64, 34, 25, 12, 22, 11, 90);

    $numdig = count($arr);

    for ($i = 0;$i < $numdig - 1;$i++)//n-1 pass
    {
        for($j=0;$j<$numdig -$i;$j++)
        {
            if ($arr[$j] > $arr[$j + 1]) {
                $temp = $arr[$j];
                $arr[$j] = $arr[$j + 1];
                $arr[$j + 1] = $temp;
            }
        }
    }
    foreach ($arr as $value) {
        echo $value . " ";
    }
?>