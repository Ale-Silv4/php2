<?php

$numeros = array(7, 12, 5, 8, 21, 16, 3, 10, 11, 14, 9, 6, 2, 19, 4);

foreach ($numeros as $numero) {
    if ($numero % 2 == 0) {
        echo "O número $numero é par.<br>";
    } else {
        echo "O número $numero é ímpar.<br>";
    }
}

?>