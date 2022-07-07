<?php

$a = 1;

while ($a < 10) {

    $a++;
    echo 'This is the Multiplication of: ' . $a . "</br>";
    for ($i = 1; $i <= 10; $i++) {

        $result = $a * $i;
        echo  $i . ' * ' . $a . ' = ' . $result . '</br>';
    }

    echo '</br>';
    echo '</br>';
    echo '</br>';
};
