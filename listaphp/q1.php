<?php

$palavra = "sonho";

function repetir($palavra){
    $palavra = strtoupper($palavra);
    return $palavra;
}

$palavramm = repetir($palavra);
echo "A palavra em maiúsculo é: $palavramm <br><br>";

echo "<hr>";

for ($i = 1; $i <= 4; $i++){
    for ($j = 1; $j <= $i; $j++){
        echo $palavramm;
        if ($j < $i) {
            echo " ";
        }
    }
    echo "<br>";
}
?>