<?php

function sequance($n)
{
    if ($n < 0) {
        return "parameter harus bilangan positif";
    }

    $data = [];

    do {

        if ($n % 2 == 0) {
            $n = $n / 2;
        } else {
            $n = ($n * 3) + 1;
        }

        array_push($data, $n);
    } while ($n != 1);

    return array("array" => $data, "count" => count($data));
}

echo "<pre>";
print_r(sequance(13));
print_r(sequance(3));
print_r(sequance(-9));
