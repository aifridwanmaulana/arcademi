<?php

function triangle($n)
{
    for ($i = 1; $i <= $n; $i++) {

        for ($d = 0; $d < ($n - $i); $d++) {
            echo "&nbsp&nbsp;";
        }
        for ($c = 0; $c < $i; $c++) {
            echo "*";
        }
        echo "<br>";
    }
}

echo  triangle(5);
