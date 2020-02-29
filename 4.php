<?php

function randomsize($n)
{
    $arr = [];
    for ($i = 0; $i < $n; $i++) {
        array_push($arr, rand(1, 30));
    }

    $sum = 0;
    for ($i = 0; $i < count($arr); $i++) {
        $sum = $sum + $arr[$i];
    }


    return array("array" => $arr, "sum" => $sum);
}

echo "<pre>";
print_r(randomsize(5));
