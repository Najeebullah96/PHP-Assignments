<?php



function rectangle($a, $b)
{
    for ($n = 0; $n < $a; $n++) {
        echo '*';
        for ($m = 0; $m < $b; $m++)
            echo '*';
        echo '</br>';
    }
}

echo rectangle(15, 33);
